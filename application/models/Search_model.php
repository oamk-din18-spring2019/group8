<?php

defined("BASEPATH") or exit("No direct script access allowed");

class Search_model extends CI_model
{
    public function __construct()
    {
        parent:: __construct();
    }

    function search($keyword)
    {
        $this->db->like('game',$keyword);
        $query=$this->db->get('games');
        return $query->result();
    }


}