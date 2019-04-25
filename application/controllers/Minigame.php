<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Minigame extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

				if(!empty($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true)
        {
					$this->load->model('Minigame_model');
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
			$user=$this->Minigame_model->getuser();
			while($game1===$game2)
				{
						$game2=$this->Minigame_model->randomgames();
				}
			if($game1!=$game2)
			{
					$data["game1"]=$game1;
					$data["game2"]=$game2;
					$data["user"]=$user;
					$data["page"]="minigame/minigame_page";
					$this->load->view("menu/content", $data);
			}

		}
		function submit_userelo()
		{
			print_r($this->input->post());
			$insert_data3=array(
					"id" => $this->input->post("id"),
					"username" => $this->input->post("username"),
					"password" => $this->input->post("password"),
					"groupid" => $this->input->post("groupid"),
					"userpoints" => $this->input->post("userpoints"),
					"ranking" => $this->input->post("ranking"),
					"infobox" => $this->input->post("infobox"),
			);
			$result=$this->Minigame_model->submit_userelo($insert_data3);

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
