<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_games extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		if(!empty($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true)
        {
            $this->load->model("Add_model");
        }
        else
        {
            redirect("");
        }  
	}

	function index()
    {
        $data["page"]="add/add_form";
        $this->load->view("menu/content", $data);
    }

    function add_game()
    {
        print_r($this->input->post());
        $insert_data=array(
            "game" => $this->input->post("game"),
            "genre" => $this->input->post("genre")
        );
        $result=$this->Add_model->add_game($insert_data);
        $data["page"]="add/add_form";
        $this->load->view("menu/content", $data);
    }

}
