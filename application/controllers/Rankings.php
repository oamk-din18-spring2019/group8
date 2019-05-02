<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rankings extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Rankings_model');
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
        $data['results']=$this->Rankings_model->rankings_list();
        $data['results2']=$this->Rankings_model->rankings_list2();
        $data['results3']=$this->Rankings_model->rankings_list_FPS();
        $data['results4']=$this->Rankings_model->rankings_list_FPS2();
        $data['results5']=$this->Rankings_model->rankings_list_MMORPG();
        $data['results6']=$this->Rankings_model->rankings_list_MMORPG2();
        $data['results7']=$this->Rankings_model->rankings_list_RPG();
        $data['results8']=$this->Rankings_model->rankings_list_RPG2();
        $data['results9']=$this->Rankings_model->rankings_list_FIGHTING();
        $data['results10']=$this->Rankings_model->rankings_list_FIGHTING2();
        $data['results11']=$this->Rankings_model->rankings_list_MOBILE();
        $data['results12']=$this->Rankings_model->rankings_list_MOBILE2();
        $data['results13']=$this->Rankings_model->rankings_list_PLATFORM();
        $data['results14']=$this->Rankings_model->rankings_list_PLATFORM2();
        $data['results15']=$this->Rankings_model->rankings_list_MOBA();
        $data['results16']=$this->Rankings_model->rankings_list_MOBA2();
        $data['results17']=$this->Rankings_model->rankings_list_OTHER();
        $data['results18']=$this->Rankings_model->rankings_list_OTHER2();
        $data["page"]="rankings/rankings_page";
        $this->load->view("menu/content", $data);
    }


}
