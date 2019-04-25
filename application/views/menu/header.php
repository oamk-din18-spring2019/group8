<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel = "stylesheet" href = "<?php echo base_url(); ?>css/style.css">
    <link rel = "stylesheet" href = "<?php echo base_url(); ?>css/battle.css">
    <link rel = "stylesheet" href = "<?php echo base_url(); ?>css/profile.css">
    <link rel = "stylesheet" href = "<?php echo base_url(); ?>css/minigame.css">
    <link rel = "stylesheet" href = "<?php echo base_url(); ?>css/rankings.css">
    <link rel = "stylesheet" href = "<?php echo base_url(); ?>css/faq.css">
    <link rel = "stylesheet" href = "<?php echo base_url(); ?>css/about.css">
    <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
    <script type = 'text/javascript' src = "<?php echo base_url(); ?>js/battle.js"></script>
    <script type = 'text/javascript' src = "<?php echo base_url(); ?>js/sample.js"></script>
    <script type = 'text/javascript' src = "<?php echo base_url(); ?>js/minigame.js"></script>
    <script type = 'text/javascript' src = "<?php echo base_url(); ?>js/global.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>GameVS</title>
  </head>
  <body onload="change_class(); change_background();">
    <div class="header">
        <div id="logo_info">
          <h1 id="logo_gamevs">GameVS</h1>
          <a id="header_logoutbutton" href="<?php echo site_url("login/logout"); ?>">
              <i class="fas fa-sign-out-alt"></i>
          </a>
          <div id="header_logout">

          </div>
        </div>
        <div id="menu">
              <ul>
                <li id="profile_link" onclick="change_class();"><a href="<?php echo site_url('profile'); ?>">Profile</a> </li>
                <li id="search_link"><a href="<?php echo site_url('search'); ?>">Search</a> </li>
                <li id="rankings_link"><a href="<?php echo site_url('rankings'); ?>">Rankings</a> </li>
                <li id="battle_link"><a href="<?php echo site_url('battle'); ?>">Battle</a> </li>
                <li id="minigame_link"><a href="<?php echo site_url('minigame'); ?>">Minigame</a> </li>
                <li id="faq_link"><a href="<?php echo site_url('faq'); ?>">FAQ & Info</a> </li>
                <li id="about_link"><a href="<?php echo site_url('about'); ?>">About</a> </li>
              </ul>
        </div>
    </div>
    <div class="container">
