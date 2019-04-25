<div id="profile_container">
  <h1 id="profile_title"><?php foreach ($profile as $row) {echo $row['username'];} ?></h1>

  <div id="profile_container_divider">
    <div class="profile_container_info">
      <div id="profile_profilepic">
        <?php foreach ($profile as $row){
                echo "<p>".$row["id"]."</p>";
                echo "<p>".$row["username"]."</p>";
                echo "<p>".$row["userpoints"]."</p>";
                echo "<p>".$row["ranking"]."</p>";
        } ?>
        <?php foreach ($profile as $row) {?>
        <img src="..\..\..\image\profilepictures\profilepicture<?php echo $row['id'];}?>.png">
      </div>
    </div>
    <div class="profile_container_info">
      <div id="profile_infobox">
        <form class="" action="<?php echo site_url("profile")?>" method="post">
          <textarea id="profile_infobox_edit" wrap="hard" maxlength="700" rows="20" cols="50" name="comment"
           placeholder="Here you should write general information like: What kind of genres you like?
           How old you are? etc..."
           form="usrform">
          </textarea> <br>
          <input type="submit" value="Upload">
        </form>
      </div>
    </div>
    <div class="profile_container_info">
      <div class="">

        <p>lorem ipsum lorem ipsum</p>
        <?php
          echo "Welcome ".$_SESSION["profileid"];
        ?>
      </div>

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