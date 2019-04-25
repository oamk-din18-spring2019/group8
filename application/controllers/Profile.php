<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		    if(!empty($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true)
        {
            $this->load->model("Profile_model");
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

    function id()
    {
      $profileid=$this->uri->segment(3);
      $data["profile"]=$this->Profile_model->profiledata($profileid);
      $data["profileid"]=$profileid;
      $data["page"]="profile/profile_page";
      $this->load->view("menu/content", $data);
    }
    /*    function infobox()
    {

    }*/

}
