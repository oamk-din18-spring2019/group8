<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Minigame extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
				$this->load->model('Minigame_model');
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
			$game1=$this->Minigame_model->randomgames();
			$game2=$this->Minigame_model->randomgames();
			while($game1===$game2)
				{
						$game2=$this->Minigame_model->randomgames();
				}
			if($game1!=$game2)
			{
					$data["game1"]=$game1;
					$data["game2"]=$game2;
					$data["page"]="minigame/minigame_page";
					$this->load->view("menu/content", $data);
		}

	}
}
