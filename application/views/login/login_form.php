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

    <?php
        session_destroy();
    ?>
<div class="content">
    <div id="login_logo">
        <h1>GameVS</h1>
    </div>

    <div id="tutorial_video">
        <video controls width="360" height="202,50">
            <source src="video/video_projekti.mp4" type="video/mp4">
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
                <input type="password" name="password" value="" required> <br> <br>
                <input type="submit" name="" value="Login" class="">
            </form>
    </div>

    <div id="no_account">
            <button id="" onclick="show_register()"> Don't have an account? </button>
            </div>

        <div id="register_box">
            <form class="register_form" action="<?php echo site_url("login/register"); ?>" method="post">
                <label title="We have no way of returning your account back. So select your username and password wisely." for="">Select Username</label> <br>
                <input title="We have no way of returning your account back. So select your username and password wisely." type="text" name="username" value=""> <br> <br>
                <label title="We have no way of returning your account back. So select your username and password wisely." for="">Select Password</label> <br>
                <input title="We have no way of returning your account back. So select your username and password wisely." type="text" name="password" value=""> <br> <br>
                <input title="We have no way of returning your account back. So select your username and password wisely." type="submit" name="" value="Create an account" class="">
            </form>
        </div>
        <div id="yes_account">
            <button id="" onclick="show_login()"> Already have an account? </button>
            </div>

        <div id="login_buttons">
            <input type="button" value="Login" class="login_button" onclick="show_login()">
            <input type="button" value="Register" class="register_button" onclick="show_register()">
        </div>

        <?php if (isset($_SESSION['login_error'])): ?>
            <div id="form_error">
                <?php foreach($_SESSION['login_error'] as $error): ?>
                    <p><?php echo $error ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['register_error'])): ?>
            <div id="form_error">
                <?php foreach($_SESSION['register_error'] as $error): ?>
                    <p><?php echo $error ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </div>

    <div id="lists">
        <div id="top5_list">
            <ol>
                Top 5 ALL Games
                <?php
                foreach ($results as $row) {?>
                        <li><?php echo $row->game ?></li>
                <?php  }?>
            </ol>
        </div>

        <div id="bottom5_list">
            <ol>
                Worst 5 ALL Games
                <?php
                foreach ($results2 as $row) {?>
                        <li><?php echo $row->game ?></li>
                <?php  }?>
            </ol>
        </div>

    </div>
</div>
    <footer class="footer">
        Joel Ala-aho & Ossi Karjalainen
    </footer>
  </body>


</html>
