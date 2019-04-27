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
        $this->db->order_by("elo", "desc");
        $this->db->limit(5);
        $query=$this->db->get("games");
        return $query->result();
    }
    function rankings_list2()
    {
        $this->db->order_by("elo", "asc");
        $this->db->limit(5);
        $query=$this->db->get("games");
        return $query->result();
    }
    function rankings_list_FPS()
    {
        $this->db->where("genre", "FPS");
        $this->db->order_by("elo", "desc");
        $this->db->limit(5);
        $query=$this->db->get("games");
        return $query->result();
    }
    function rankings_list_FPS2()
    {
        $this->db->where("genre", "FPS");
        $this->db->order_by("elo", "asc");
        $this->db->limit(5);
        $query=$this->db->get("games");
        return $query->result();
    }
    function rankings_list_RPG()
    {
        $this->db->where("genre", "RPG");
        $this->db->order_by("elo", "desc");
        $this->db->limit(5);
        $query=$this->db->get("games");
        return $query->result();
    }
    function rankings_list_RPG2()
    {
        $this->db->where("genre", "RPG");
        $this->db->order_by("elo", "asc");
        $this->db->limit(5);
        $query=$this->db->get("games");
        return $query->result();
    }
    function rankings_list_MMORPG()
    {
        $this->db->where("genre", "MMORPG");
        $this->db->order_by("elo", "desc");
        $this->db->limit(5);
        $query=$this->db->get("games");
        return $query->result();
    }
    function rankings_list_MMORPG2()
    {
        $this->db->where("genre", "MMORPG");
        $this->db->order_by("elo", "asc");
        $this->db->limit(5);
        $query=$this->db->get("games");
        return $query->result();
    }


}
