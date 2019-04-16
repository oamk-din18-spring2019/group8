<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel = "stylesheet" href = "<?php echo base_url(); ?>css/style.css">
    <link rel = "stylesheet" href = "<?php echo base_url(); ?>css/battle.css">
    <link rel = "stylesheet" href = "<?php echo base_url(); ?>css/profile.css">
    <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
    <script type = 'text/javascript' src = "<?php echo base_url(); ?>js/battle.js"></script>
    <script type = 'text/javascript' src = "<?php echo base_url(); ?>js/sample.js"></script>
    <title>GameVS</title>
  </head>
  <body>
    <div class="header">
        <div id="logo_info">
          <h1 id="logo_gamevs">GameVS</h1>
          <div id="header_logout">
            <a href="<?php echo site_url("login/logout"); ?>">logout</a>
          </div>
        </div>
        <div id="menu">
              <ul>
                <li><a href="<?php echo site_url('profile'); ?>">Profile</a> </li>
                <li><a href="<?php echo site_url('search'); ?>">Search</a> </li>
                <li><a href="<?php echo site_url('battle'); ?>">Battle</a> </li>
                <li><a href="<?php echo site_url('rankings'); ?>">Rankings</a> </li>
                <li><a href="<#>">FAQ & Info</a> </li>
                <li><a href="<#>">About</a> </li>
              </ul>
        </div>
    </div>
    <div class="container">
