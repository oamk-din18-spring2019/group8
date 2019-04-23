<link rel = "stylesheet" href = "<?php echo base_url(); ?>css/form.css">

<div class="search_box">
  <label for="">Search with a keyword</label>
  <form class="input_form" role="search" action="<?php echo site_url("search/search")?>"  method = "post">
      <input type="text" placeholder="Search" name="keyword" size="15px; "> <br>
      <input type="submit" type="submit" onclick="show_search()" value="Search">
  </form>

  ...or search by genre
  <div class="result_box">
  <?php foreach ($genres as $row){ 
  echo "<p>".$row["genre"]."</p>";
    } ?>
  </div>
</div>
