<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
	}

	function index()
    {
        $data["page"]="login/login_form";
        $this->load->view("login/login_form", $data);
    }

	public function Login()
	{
		$this->load->model("Login_model");
        $given_username = $this->input->post("username");
        $given_password = $this->input->post("password");
		$db_password=$this->Login_model->get_password($given_username);

        if(password_verify($given_password, $db_password))
        {
            $_SESSION["logged_in"]=true;
            $_SESSION["username"]=$given_username;
            $data["page"]="login/personal_page";
            $this->load->view("menu/content", $data);
        }
        else
        {
            $_SESSION["logged_in"]=false;
            redirect("login");
		}

		function logout()
        {
            $_SESSION["logged_in"]=false;
            $_SESSION["username"]="";
            $data["page"]="login/logout_page";
            $this->load->view("menu/content", $data);
        }
	}


}
