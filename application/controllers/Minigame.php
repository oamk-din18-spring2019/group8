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
		function submit_elo()
		{
			print_r($this->input->post());
			$insert_data=array(
					"id" => $this->input->post("id1"),
					"game" => $this->input->post("game1"),
					"genre" => $this->input->post("genre1"),
					"ranking" => $this->input->post("ranking1"),
					"genreranking" => $this->input->post("genreranking1"),
					"elo" => $this->input->post("elo1"),
					"genreelo" => $this->input->post("genreelo1"),
			);
			$insert_data2=array(
				"id" => $this->input->post("id2"),
				"game" => $this->input->post("game2"),
				"genre" => $this->input->post("genre2"),
				"ranking" => $this->input->post("ranking2"),
				"genreranking" => $this->input->post("genreranking2"),
				"elo" => $this->input->post("elo2"),
				"genreelo" => $this->input->post("genreelo2")
			);
			$result=$this->Battle_model->submit_elo($insert_data);
			$result=$this->Battle_model->submit_elo($insert_data2);

			if ($result==1)
			{
					redirect("minigame");
			}

			else
			{
					redirect("minigame");
			}


		}


	}
}
