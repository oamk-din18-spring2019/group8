<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Search_model');
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
        $data["page"]="search/search_page";
        $this->load->view("menu/content", $data);
    }

    function search()
    {
        $keyword=$this->input->post('keyword');
        $data['results']=$this->Search_model->search($keyword);
				$data["page"]="search/search_results";
        $this->load->view('menu/content',$data);
    }
}
