<?php

defined("BASEPATH") or exit("No direct script access allowed");

class Profile_model extends CI_model
{
    public function __construct()
    {
        parent:: __construct();
    }

    public function profiledata($profileid)
    {
      $this->db->select("*");
      $this->db->from("users");
      $this->db->where("id", $profileid);
      return $this->db->get()->result_array();
    }

    public function infobox($insert_data)
    {
      $this->db->insert("games", $insert_data);
      return $this->db->affected_rows();

      $_SESSION["username"]=$given_username;
    }

}
