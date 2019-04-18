<?php

defined("BASEPATH") or exit("No direct script access allowed");

class Upload_model extends CI_model
{
    public function __construct()
    {
        parent:: __construct();
    }

    public function get_games()
    {
        $this->db->select("game,id");
        $this->db->from("games");
        return $this->db->get()->result_array();
    }
}