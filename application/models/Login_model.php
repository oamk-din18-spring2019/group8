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
        $this->db->from("users");
        $this->db->where("username", $given_username);
        return $this->db->get()->row("password");
    }

    public function get_id($given_username)
    {
        $this->db->select("id");
        $this->db->from("users");
        $this->db->where("username", $given_username);
        return $this->db->get()->row("id");
    }

    public function get_groupid($given_username)
    {
        $this->db->select("groupid");
        $this->db->from("users");
        $this->db->where("username", $given_username);
        return $this->db->get()->row("groupid");
    }
}