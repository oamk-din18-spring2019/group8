<?php

defined("BASEPATH") or exit("No direct script access allowed");

class Update_model extends CI_model
{
    public function __construct()
    {
        parent:: __construct();
    }

    public function update() 
    {
        /*
        $this->db->set('@r=0'); 
        $this->db->update('games');
        $this->db->set('ranking= @r:=("r+1)');
        $this->db->where('elo is NOT NULL', 'null', 'FALSE');
        $this->db->order_by('elo', 'desc');
        */
    }
}