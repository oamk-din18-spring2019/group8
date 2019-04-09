<?php

defined("BASEPATH") or exit("No direct script access allowed");

class Add_model extends CI_model
{
    public function __construct()
    {
        parent:: __construct();
    }

    public function add_game($insert_data)
    {
        $this->db->insert("games", $insert_data);
        return $this->db->affected_rows();
    }
}