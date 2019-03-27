<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css">
    <script type = 'text/javascript' src = "<?php echo base_url(); ?>js/sample.js"></script> 
    <title>GameVS</title>
  </head>
  <body>
    <div class="header">
      <div id="profile_link">

      </div>
      <div id="logo_info">
        <h1>TEST</h1>
      </div>

    <form class="" action="<?php echo site_url("login/login"); ?>" method="post">
        <label for="">username</label> <br>
        <input type="text" name="username" value=""> <br>
        <label for="">password</label> <br>
        <input type="text" name="password" value=""> <br>
        <input type="submit" name="" value="login"> 
    </form>

    <div class="footer">
    <p id="footer_info">Joel Ala-aho & Ossi Karjalainen</p>
    </div>

  </body>
</html>