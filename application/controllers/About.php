<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

				if(!empty($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true)
        {
            $this->load->model("About_model");
        }
        else
        {
            redirect("");
        }
    }

		function index()
	    {
	        $data["page"]="about/about_page";
	        $this->load->view("menu/content", $data);
	    }


}
