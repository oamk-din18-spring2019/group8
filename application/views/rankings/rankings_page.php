<div id="rankings_container">
<div id="rankings_title">
  <h1 >Rankings</h1>
</div>
<div id="rankings_content">
  <div class="rankings_infocontainer">
      <div class="rankings_listtitle">
        <h2>TOP 5 All games</h2>
      </div>
    <div class="rankings_listnumbers">
      <p>1</p><br>
      <p>2</p><br>
      <p>3</p><br>
      <p>4</p><br>
      <p>5</p><br>
    </div>
  <div class="">
      <?php
      foreach ($results as $row) {?>
            <p><?php echo $row->game ?></p><br>
      <?php  }?>
  </div>
</div>
<div class="rankings_infocontainer">
  <div class="rankings_listtitle">
    <h2>WORST 5 All games</h2>
  </div>
    <div class="rankings_listnumbers">
      <p>1</p><br>
      <p>2</p><br>
      <p>3</p><br>
      <p>4</p><br>
      <p>5</p><br>
    </div>
  <div class="">
      <?php
      foreach ($results2 as $row) {?>
            <p><?php echo $row->game ?></p><br>
      <?php  }?>
  </div>
  </div>
</div>
</div>
