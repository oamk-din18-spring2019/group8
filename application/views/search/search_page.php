<link rel = "stylesheet" href = "<?php echo base_url(); ?>css/form.css">
<div class="search_container">

    <h1>Search</h1>
<div class="search_box">
  <div class="search_games">
    <label for="">Search for games</label>
    <form class="input_form" role="search" action="<?php echo site_url("search/games")?>"  method = "post">
      <input class="search_gamesinput"  type="text" placeholder="Enter game here" name="keyword" size="15px; "> <br>
      <input class="search_submitgames" type="submit" type="submit" onclick="show_search()" value="Search Games">
    </form>
  </div>

  <div class="search_profiles">
    <label for="">Search for users</label>
    <form class="input_form" role="search" action="<?php echo site_url("search/users")?>"  method = "post">
      <input class="search_profilesinput" type="text" placeholder="Enter username here" name="profile" size="15px; "> <br>
      <input class="search_submitprofiles" type="submit" type="submit" onclick="show_search()" value="Search Profiles">
    </form>
</div>

</div>
</div>
