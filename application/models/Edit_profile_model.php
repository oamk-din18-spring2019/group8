<?php

defined("BASEPATH") or exit("No direct script access allowed");

class Edit_profile_model extends CI_model
{
    public function __construct()
    {
        parent:: __construct();
    }

    public function infobox($insert_data)
    {
      $this->db->insert("games", $insert_data);
      return $this->db->affected_rows();

      $_SESSION["username"]=$given_username;
    }

}
