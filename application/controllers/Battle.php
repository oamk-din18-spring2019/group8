<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Battle extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
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
        $data["page"]="battle/battle_page";
        $this->load->view("menu/content", $data);
    }

}
