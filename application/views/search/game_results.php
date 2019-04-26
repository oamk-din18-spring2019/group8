<link rel = "stylesheet" href = "<?php echo base_url(); ?>css/form.css">
<div class="search_container">
<h1>Search</h1>
<div class="search_box">
  <div class="search_games">
    <form class="input_form" role="search" action="<?php echo site_url("search/games")?>"  method = "post">
        <input class="search_gamesinput" type="text" placeholder="Search" name="keyword" size="15px; ">
        <input class="search_submitgames" type="submit" type="submit" onclick="show_search()" value="Search">
    </form>

    <?php
    foreach ($results as $row) {?>
      <p><a class="search_results" href="<?php echo base_url() ?>index.php/games/get_game/<?php echo $row->id ?>"><?php echo $row->game ?></a></p> 

      <?php  }  ?>
  </div>
</div>
</div>