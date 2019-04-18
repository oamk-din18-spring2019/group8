<?php

defined("BASEPATH") or exit("No direct script access allowed");

class Minigame_model extends CI_model
{
    public function __construct()
    {
        parent:: __construct();
    }


public function randomgames()
{
  $this->db->order_by('rand()');
  $this->db->limit(1);
  $query = $this->db->get('games');
  return $query->result_array();
}
}
