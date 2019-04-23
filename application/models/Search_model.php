<?php

defined("BASEPATH") or exit("No direct script access allowed");

class Search_model extends CI_model
{
    public function __construct()
    {
        parent:: __construct();
    }

    function getgenres()
    {
        $this->db->distinct();
        $this->db->select("genre");
        $this->db->from("games");
        return $this->db->get()->result_array();
    }

    function search($keyword)
    {
        $this->db->like('game',$keyword);
        $query=$this->db->get('games');
        return $query->result();
    }

    function searchbygenre($genre)
    {
        $this->db->like('genre',$genre);
        $query=$this->db->get('games');
        return $query->result();
    }
}