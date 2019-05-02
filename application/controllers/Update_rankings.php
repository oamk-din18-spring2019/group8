<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update_rankings extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		if(!empty($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true && $_SESSION["groupid"] == 1 )
        {
            $this->load->model("Update_model");
        }
        else
        {
            redirect("");
        }  
	}

	function index()
    {
        $data["page"]="update/update_rankings";
        $this->load->view("menu/content", $data);
    }

    function update_rankings()
    {
        $sql1="SET @r=0";
        $sql2="UPDATE games SET ranking= @r:= (@r+1) WHERE elo is not null ORDER BY elo DESC";
        $this->db->query($sql1);
        $this->db->query($sql2);

        $sql3="SET @a=0";
        $sql4="UPDATE games SET genreranking= @a:= (@a+1) WHERE genre='FPS' ORDER BY elo DESC";
        $this->db->query($sql3);
        $this->db->query($sql4);

        $sql5="SET @b=0";
        $sql6="UPDATE games SET genreranking= @b:= (@b+1) WHERE genre='FIGHTING' ORDER BY elo DESC";
        $this->db->query($sql5);
        $this->db->query($sql6);

        $sql7="SET @c=0";
        $sql8="UPDATE games SET genreranking= @c:= (@c+1) WHERE genre='MMORPG' ORDER BY elo DESC";
        $this->db->query($sql7);
        $this->db->query($sql8);

        $sql9="SET @d=0";
        $sql10="UPDATE games SET genreranking= @d:= (@d+1) WHERE genre='MOBA' ORDER BY elo DESC";
        $this->db->query($sql9);
        $this->db->query($sql10);

        $sql11="SET @e=0";
        $sql12="UPDATE games SET genreranking= @e:= (@e+1) WHERE genre='MOBILE' ORDER BY elo DESC";
        $this->db->query($sql11);
        $this->db->query($sql12);

        $sql13="SET @f=0";
        $sql14="UPDATE games SET genreranking= @f:= (@f+1) WHERE genre='OTHER' ORDER BY elo DESC";
        $this->db->query($sql13);
        $this->db->query($sql14);

        $sql15="SET @g=0";
        $sql16="UPDATE games SET genreranking= @g:= (@g+1) WHERE genre='PLATFORM' ORDER BY elo DESC";
        $this->db->query($sql15);
        $this->db->query($sql16);

        $sql17="SET @h=0";
        $sql18="UPDATE games SET genreranking= @h:= (@h+1) WHERE genre='RPG' ORDER BY elo DESC";
        $this->db->query($sql17);
        $this->db->query($sql18);

        $sql19="SET @i=0";
        $sql20="UPDATE games SET genreranking= @i:= (@i+1) WHERE genre='STORY' ORDER BY elo DESC";
        $this->db->query($sql19);
        $this->db->query($sql20);

        $sql21="SET @u=0";
        $sql22="UPDATE users SET ranking= @u:= (@u+1) WHERE userpoints is not null ORDER BY userpoints DESC";
        $this->db->query($sql21);
        $this->db->query($sql22);

        $data["page"]="update/update_rankings";
        $this->load->view("menu/content", $data);
    }

}