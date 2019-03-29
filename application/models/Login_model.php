<?php

defined("BASEPATH") or exit("No direct script access allowed");

class Login_model extends CI_model
{
    public function __construct()
    {
        parent:: __construct();
    }

    public function get_password($given_username)
    {
        $this->db->select("password");
        $this->db->from("user");
        $this->db->where("username", $given_username);
        return $this->db->get()->row("password");
    }
}