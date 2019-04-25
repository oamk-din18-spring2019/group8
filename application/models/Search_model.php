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

    function searchgames($keyword)
    {
        $this->db->order_by("game", "asc");
        $this->db->like('game', $keyword);
        $query=$this->db->get('games');
        return $query->result();
    }

    function searchprofiles($profile)
    {
        $this->db->order_by("username", "asc");
        $this->db->like('username', $profile);
        $query=$this->db->get('users');
        return $query->result();
    }

    /*function searchbygenre($genre)
    {
        $this->db->like('genre',$genre);
        $query=$this->db->get('games');
        return $query->result();
    }*/
}