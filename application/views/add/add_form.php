<link rel = "stylesheet" href = "<?php echo base_url(); ?>css/add.css">

<form class="add_form" action="<?php echo site_url("add_games/add_games"); ?>" method="post">
    <label for="">Game</label> <br>
    <input type="text" name="game" value=""> <br>
    <label for="">Genre</label> <br>
    <input type="text" name="genre" value=""> <br>
    <!--<input type="file" name="picupload" value="picupload" accept="image"> -->
    <input type="submit" name="" value="Submit">
</form>     

