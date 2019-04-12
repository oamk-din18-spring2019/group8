<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Battle extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
				if(!empty($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true)
        {
	            $this->load->model('Battle_model');
        }
        else
        {
            redirect("");
        }

	}


	function index()
    {
			$game1=$this->Battle_model->pickedgames();
			$game2=$this->Battle_model->pickedgames();
			while($game1===$game2)
				{
						$game2=$this->Battle_model->pickedgames();
				}
			if($game1!=$game2)
			{
					$data["game1"]=$game1;
					$data["game2"]=$game2;
					$data["page"]="battle/battle_page";
					$this->load->view("menu/content", $data);
}

}
}
