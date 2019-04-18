<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

    public function __construct() 
    {
        parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->model("Upload_model");
    }

    public function index() 
    {
        $data["games"]=$this->Upload_model->get_games();
        $data["page"]="upload_form";
        $this->load->view("menu/content", $data);
    }

    public function store() 
    {
        $new_name = "gamepicture".$_POST["id"];
        $config['file_name'] = $new_name;
        $config['overwrite'] = TRUE;
        $config['upload_path'] = './image/gamepictures/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
        $config['max_width'] = 1500;
        $config['max_height'] = 1500;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('game_image')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload_form', $error);
        } else {
            $data = array('image_metadata' => $this->upload->data());

            $this->load->view('upload_result', $data);
        }
    }

}