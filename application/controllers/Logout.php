<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function logout()
  {
      $_SESSION["logged_in"]=false;
      $_SESSION["username"]="";
      session_destroy();
      $data["page"]="login/login_form";
      $this->load->view("login/login_form", $data);
  }
}
