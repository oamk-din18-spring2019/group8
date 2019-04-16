<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rankings extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Rankings_model');
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
        $data['results']=$this->Rankings_model->rankings_list();
        $data["page"]="rankings/rankings_page";
        $this->load->view("menu/content", $data);
    }


}
