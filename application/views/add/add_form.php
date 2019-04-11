<link rel = "stylesheet" href = "<?php echo base_url(); ?>css/form.css">

<form class="input_form" action="<?php echo site_url("add_games/add_game"); ?>" method="post">
    <label for="">Game</label> <br>
    <input type="text" name="game" value=""> <br>
    <label for="">Genre</label> <br>
    <select name="genre">
        <option value="FPS">FPS</option>
        <option value="RPG">RPG</option>
        <option value="MOBA">MOBA</option>
        <option value="MMORPG">MMORPG</option>
    </select>
    <!--<input type="file" name="picupload" value="picupload" accept="image"> -->
    <input type="submit" name="" value="Submit">
</form>     

