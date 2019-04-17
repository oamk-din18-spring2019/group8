<?php

defined("BASEPATH") or exit("No direct script access allowed");

class Battle_model extends CI_model
{
    public function __construct()
    {
        parent:: __construct();
    }

    public function pickedgames()
    {
      $this->db->order_by('rand()');
      $this->db->limit(1);
      $query = $this->db->get('games');
      return $query->result_array();

    }

    public function submit_elo($insert_data)
    {
        $this->db->replace("games", $insert_data);
        return $this->db->affected_rows();
    }

}
