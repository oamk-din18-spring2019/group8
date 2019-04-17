<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Profile_model");
				if(!empty($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true)
        {
            //
        }
        else
        {
            redirect("");
        }
    }

		function index()
	    {
	        $data["page"]="profile/profile_page";
	        $this->load->view("menu/content", $data);
	    }

    function infobox()
    {

    }

}
