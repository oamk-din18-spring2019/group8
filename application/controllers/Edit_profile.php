<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_profile extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		if(!empty($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true)
        {
            $this->load->model("Edit_profile_model");
        }
        else
        {
            redirect("");
        }
    }

    public function index()
    {
        $data["page"]="profile/edit_profile_page";
        $this->load->view("menu/content", $data);
    }

    public function profilepic() 
    {
        $new_name = "profilepicture".$_SESSION["profileid"];
        $config['file_name'] = $new_name;
        $config['overwrite'] = TRUE;
        $config['upload_path'] = './image/profilepictures/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
        $config['max_width'] = 1500;
        $config['max_height'] = 1500;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('profile_picture')) 
        {
            $data["error"] = array('error' => $this->upload->display_errors());
            $this->load->view("menu/content", $error);
        } 

        else 
        {
            $data["page"]="profile/edit_profile_page";
            $this->load->view("menu/content", $data);
        }
    }

    function infobox()
    {

    }

}
