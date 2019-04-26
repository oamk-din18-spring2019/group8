<div id="rankings_container">
<div id="rankings_title">
  <h1 >Rankings</h1>
</div>
<div id="rankings_content">
  <div class="rankings_infocontainer">
        <ol>
        <h2 class="rankings_listtitle">TOP 5 All games</h2>
      <?php
      foreach ($results as $row) {?>
            <li><?php echo $row->game ?></li>
      <?php  }?>
      </ol>
</div>
<div class="rankings_infocontainer">
    <ol>
    <h2 class="rankings_listtitle">WORST 5 All games</h2>
      <?php
      foreach ($results2 as $row) {?>
            <li><?php echo $row->game ?></li>
      <?php  }?>
      </ol>
  </div>
</div>
</div>
