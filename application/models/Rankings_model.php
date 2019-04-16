<?php

defined("BASEPATH") or exit("No direct script access allowed");

class Rankings_model extends CI_model
{
    public function __construct()
    {
        parent:: __construct();
    }

    function rankings_list()
    {
        $query=$this->db->get('games');
        return $query->result();
    }

}
