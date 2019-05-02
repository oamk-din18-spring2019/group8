

<div id="profile_container">
  <h1 id="profile_title"><?php echo $_SESSION["username"]?></h1>

  <div id="profile_container_divider">
    <div class="profile_container_info">
      <div id="profile_profilepic">
        <img src="..\image\profilepictures\profilepicture<?php echo $_SESSION["profileid"]?>.png">
      </div>
      <div id="profile_picture">
        <form class="" action="<?=base_url('index.php/edit_profile/profilepic')?>" method="post" enctype="multipart/form-data">
            <p>Add or Edit your profile picture</p>
            <input id="profile_addpicture" type="file" name="profile_picture" id="profile_picture" placeholder="Picture"
             accept=".png" required="" capture>
            <input type="submit" value="Upload">
            <p>You can only add .PNG files</p>
        </form>
      </div>
    </div>
    <div class="profile_container_info">
      <div id="profile_infobox">
        <form class="" action="<?php echo site_url("edit_profile/infobox")?>" method="post">
          <textarea name="profile_infobox_edit" wrap="hard" maxlength="700" rows="20" cols="50" placeholder="Here you should write general information like: What kind of genres you like? How old you are? etc..."><?php foreach ($result as $row){echo strip_tags($row["infobox"]);}?></textarea> <br>
          <input type="submit" value="Upload">
        </form>
      </div>
    </div>
    <div class="profile_container_info">
      <div class="">

    </div>
  </div>
</div>
