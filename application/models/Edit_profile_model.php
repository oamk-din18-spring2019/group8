<?php

defined("BASEPATH") or exit("No direct script access allowed");

class Edit_profile_model extends CI_model
{
    public function __construct()
    {
        parent:: __construct();
    }

    public function edit_infobox($update_data, $id)
    {
      
      $this->db->set("infobox", $update_data);
      $this->db->where("id", $id);
      $this->db->update("users");
  
    }

    public function getinfobox($id)
    {
      $this->db->select("*");
      $this->db->from("users");
      $this->db->where("id", $id);
      return $this->db->get()->result_array();
    }
}
