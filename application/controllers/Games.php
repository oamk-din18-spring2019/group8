<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		if(!empty($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true)
        {
            $this->load->model("Games_model");
        }
        else
        {
            redirect("");
        }
    }

    function index()
    {
        $data["page"]="games/game_page";
        $this->load->view("menu/content", $data);
    }

    function get_game()
    {
        $id=$this->uri->segment(3);
        $data["game"]=$this->Games_model->get_game($id);
        $data["page"]="games/get_game";
        $this->load->view("menu/content", $data);
    }

}
