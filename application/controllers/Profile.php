<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function construct()
    {
        parent::construct();
        $this->load->model("Profile_model");
    }

		function index()
	    {
	        $data["page"]="profile/profile_page";
	        $this->load->view("menu/content", $data);
	    }

    function infobox()
    {
        print_r($this->input->post());
        $insert_data=array(
            "game" => $this->input->post("game"),
        );
        $result=$this->Add_model->add_game($insert_data);

        if ($result==1)
        {
            $data["message"]="Your profile has been updated!";
        }

        else
        {
            $data["message"]="Something went wrong!";
        }

        $data["page"]="profile/profile_page";
        $this->load->view("menu/content", $data);
    }

}
