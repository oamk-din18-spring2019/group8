<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel = "stylesheet" href = "<?php echo base_url(); ?>css/style.css">
    <link rel = "stylesheet" href = "<?php echo base_url(); ?>css/battle.css">
    <link rel = "stylesheet" href = "<?php echo base_url(); ?>css/profile.css">
    <link rel = "stylesheet" href = "<?php echo base_url(); ?>css/minigame.css">
    <link rel = "stylesheet" href = "<?php echo base_url(); ?>css/rankings.css">    
    <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
    <script type = 'text/javascript' src = "<?php echo base_url(); ?>js/battle.js"></script>
    <script type = 'text/javascript' src = "<?php echo base_url(); ?>js/sample.js"></script>
    <script type = 'text/javascript' src = "<?php echo base_url(); ?>js/global.js"></script>
    <title>GameVS</title>
  </head>
  <body onload="change_class();">
    <div class="header">
        <div id="logo_info">
          <h1 id="logo_gamevs">GameVS</h1>
          <div id="header_logout">
            <a href="<?php echo site_url("login/logout"); ?>">logout</a>
          </div>
        </div>
        <div id="menu">
              <ul>
                <li id="profile_link" onclick="change_class();"><a href="<?php echo site_url('profile'); ?>">Profile</a> </li>
                <li id="search_link"><a href="<?php echo site_url('search'); ?>">Search</a> </li>
                <li id="battle_link"><a href="<?php echo site_url('battle'); ?>">Battle</a> </li>
                <li id="rankings_link"><a href="<?php echo site_url('rankings'); ?>">Rankings</a> </li>
                <li id="minigame_link"><a href="<?php echo site_url('minigame'); ?>">Minigame</a> </li>
                <li id="faq_link"><a href="<#>">FAQ & Info</a> </li>
                <li id="about_link"><a href="<#>">About</a> </li>
              </ul>
        </div>
    </div>
    <div class="container">
