<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

	}

	function index()
    {
        if(!empty($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true)
        {
            redirect("battle");
        }
        else
        {
            $data["page"]="login/login_form";
            $this->load->view("login/login_form", $data);
        }
    }

	public function login()
	{
		$this->load->model("Login_model");
        $given_username = $this->input->post("username");
        $given_password = $this->input->post("password");
        $db_password=$this->Login_model->get_password($given_username);
        $_SESSION['login_error'] = array("Your username or password was incorrect.");

        if($given_password == $db_password) // <--- ONLY FOR TESTING !!! should be = password_verify($given_password, $db_password)

        {
            $_SESSION["logged_in"]=true;
            $_SESSION["username"]=$given_username;
            redirect("battle");
        }
        else
        {
            $_SESSION["logged_in"]=false;
            redirect("");
		}
    }

    public function register()
    {
        $_SESSION['register_error'] = array("Given username is already taken.");
        $connection = mysqli_connect('localhost', 'root', 'root');
        if (!$connection)
        {
            die("Database Connection Failed" . mysqli_error($connection));
        }

        $select_db = mysqli_select_db($connection, 'users');

        if (!$select_db)
        {
            die("Database Selection Failed" . mysqli_error($connection));
        }

        $username = $_POST['username'];
        $sql_usernames = "SELECT * FROM user WHERE username='$username'";
        $res_usernames = mysqli_query($connection, $sql_usernames);

        if(mysqli_num_rows($res_usernames) > 0)
        {
          $name_error = "Sorry... username already taken";
          redirect("");
        }

        else if(isset($_POST['username']) && isset($_POST['password']))
        {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $query = "INSERT INTO `user` (username, password) VALUES ('$username', '$password')";
            $result = mysqli_query($connection, $query);
            if($result){
                $smsg = "User Created Successfully.";
                $data["page"]="profile/profile_page";
                $this->load->view("menu/content", $data);
            }else{
                $fmsg ="User Registration Failed";
            }
        }
    }


    public function logout()
    {
        $_SESSION["logged_in"]=false;
        $_SESSION["username"]="";
        $data["page"]="login/login_form";
        $this->load->view("login/login_form", $data);
				redirect("");
				session_destroy();
    }


}
