<link rel = "stylesheet" href = "<?php echo base_url(); ?>css/form.css">
<div class="">
  <form class="input_form" role="search" action="<?php echo site_url("search/search")?>"  method = "post">
      <input type="text" placeholder="Search" name="keyword" size="15px; ">
      <input type="submit" type="submit" onclick="show_search()" value="Search">
  </form>
</div>
<div >
  <?php
  foreach ($results as $row) {?>
    <p><a href="<?php echo site_url('rankings'); ?>"><?php echo $row->game ?></a></p>

    <?php  }?>

</div>
