<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

				if(!empty($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true)
        {
            $this->load->model("Faq_model");
        }
        else
        {
            redirect("");
        }
    }

		function index()
	    {
	        $data["page"]="faq/faq_page";
	        $this->load->view("menu/content", $data);
	    }


}
