<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

	}

	function index()
    {
        $data["page"]="profile/profile_page";
        $this->load->view("menu/content", $data);
    }

}
