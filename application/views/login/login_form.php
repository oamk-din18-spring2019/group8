<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel = "stylesheet" type = "text/css" href = "css/style.css">
    <link rel = "stylesheet" type = "text/css" href = "css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">
    <script type = 'text/javascript' src = "<?php echo base_url(); ?>js/login.js"></script> 
    <title>GameVS</title>
  </head>
  <body>

    <div id="login_logo">
        <h1>GameVS</h1>
    </div>

    <div id="tutorial_video">
        <video controls width="360" height="202,50">
            <source src="video/demo.mp4" type="video/mp4">
            <source src="video/demo.webm" type="video/webm">
            <div style="border: 1px solid black ; padding: 8px ;">
                Sorry, your browser does not support the &lt;video&gt; tag used in this demo.
            </div>
        </video>
    </div>

    <div id="login">

        <div id="login_box">
            <form class="login_form" action="<?php echo site_url("login/login"); ?>" method="post">
                <label for="">Username</label> <br>
                <input type="text" name="username" value=""> <br> <br>
                <label for="">Password</label> <br>
                <input type="text" name="password" value=""> <br> <br>
                <input type="submit" name="" value="Login" class=""> 
            </form>
        </div>

        <div id="register_box">
            <form class="register_form" action="<?php echo site_url("login/register"); ?>" method="post">
                <label for="">Select username</label> <br>
                <input type="text" name="username" value=""> <br> <br>
                <label for="">Select password</label> <br>
                <input type="text" name="password" value=""> <br> <br>
                <input type="submit" name="" value="Create an account" class=""> 
            </form>
        </div>

        <div id="login_buttons">
            <input type="button" value="Login" class="login_button" onclick="show_login()">
            <input type="button" value="Register" class="register_button" onclick="show_register()">
        </div>

    </div>

    <div id="lists">

        <div id="top5_list">
            <ol>
                Top 5
                <li>csgo</li>
                <li>terraria</li>
                <li>cod</li>
                <li>minecraft</li>
                <li>apex</li>
            </ol>
        </div>

        <div id="bottom5_list">
            <ol>
                Bottom 5
                <li>lol</li>
                <li>titanfall</li>
                <li>gta v</li>
                <li>fallout 76</li>
                <li>fortnite</li>
            </ol>
        </div>

    </div>

    <div class="footer">
        <p id="footer_info">Joel Ala-aho & Ossi Karjalainen</p>
    </div>

  </body>
</html>