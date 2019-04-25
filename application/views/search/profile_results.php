<link rel = "stylesheet" href = "<?php echo base_url(); ?>css/form.css">

<div class="search_box">
  <div class="search_profiles">
    <form class="input_form" role="search" action="<?php echo site_url("search/users")?>"  method = "post">
        <input type="text" placeholder="Search" name="profile" size="15px; ">
        <input type="submit" type="submit" onclick="show_search()" value="Search">
    </form>
  </div>
  <div class="result_box">
    <?php
    foreach ($profiles as $row) {?>
      <p><a href="<?php echo base_url() ?>index.php/profile/id/<?php echo $row->id ?>"><?php echo $row->username ?></a></p> 

      <?php  }  ?>
  </div>
</div>