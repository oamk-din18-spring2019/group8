<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

	public function login_page()
	{
		$data["page"]="login/login_form";
		$this->load->view('menu/content', $data);
	}


}
