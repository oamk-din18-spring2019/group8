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
  public function getuser()
  {
    $this->db->where('id',$_SESSION["profileid"]);
    $query = $this->db->get('users',$_SESSION["profileid"]);
    return $query->result_array();
  }
  public function submit_userelo($insert_data)
  {

      $this->db->replace("users", $insert_data);
      return $this->db->affected_rows();
  }
}
