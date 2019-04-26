<div id="profile_container">
  <h1 id="profile_title"><?php foreach ($profile as $row) {echo $row['username'];} ?></h1>

  <div id="profile_container_divider">
    <div class="profile_container_info">
      <div id="profile_profilepic">
        <?php foreach ($profile as $row) {?>
        <img src="..\..\..\image\profilepictures\profilepicture<?php echo $row['id'];}?>.png" alt="No picture... (yet?)">
        <?php foreach ($profile as $row){
          echo "<p>Rank: ".$row["ranking"]."</p>";
          echo "<p>Points: ".$row["userpoints"]."</p>";
        } ?>
      </div>
    </div>
    <div class="profile_container_info">
      <div id="profile_infobox">
        <?php foreach ($profile as $row){
                  echo strip_tags("<p>".$row["infobox"]."</p>");
          } ?>
      </div>
    </div>
    <div class="profile_container_info">
      <?php
        if($_SESSION["profileid"] == $profileid) 
        {
          ?>
          <form action="<?php echo site_url("edit_profile")?>" method="post">
          <input type="submit" name="someAction" value="Edit your profile" />
          </form>
      <?php
        }?>
    </div>
  </div>
</div>