<link rel = "stylesheet" href = "<?php echo base_url(); ?>css/form.css">

<div class="search_box">
  <div class="search_games">
    <label for="">Search for games</label>
    <form class="input_form" role="search" action="<?php echo site_url("search/games")?>"  method = "post">
      <input type="text" placeholder="Enter game here" name="keyword" size="15px; "> <br>
      <input type="submit" type="submit" onclick="show_search()" value="Search">
    </form>
  </div>

  <div class="search_profiles">
    <label for="">Search for users</label>
    <form class="input_form" role="search" action="<?php echo site_url("search/users")?>"  method = "post">
      <input type="text" placeholder="Enter username here" name="profile" size="15px; "> <br>
      <input type="submit" type="submit" onclick="show_search()" value="Search">
    </form>
  </div>
</div>
