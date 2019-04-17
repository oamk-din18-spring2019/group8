<?php

defined("BASEPATH") or exit("No direct script access allowed");

class Games_model extends CI_model
{
    public function __construct()
    {
        parent:: __construct();
    }

    public function get_game($id)
    {
        $this->db->select("*");
        $this->db->from("games");
        $this->db->where("id",$id);
        return $this->db->get()->result_array();
    }

}