<?php

defined("BASEPATH") or exit("No direct script access allowed");

class Profile_model extends CI_model
{
    public function __construct()
    {
        parent:: __construct();
    }

    public function infobox($insert_data)
    {
        $this->db->select("infobox");
        $this->db->from("profilepage");
        $this->db->where("idprofilepage", $given_username);
        $this->db->get()->row("infobox");
        
        $_SESSION["username"]=$given_username;
    }

}
