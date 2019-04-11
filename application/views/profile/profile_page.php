

<div id="profile_container">
  <h1 id="profile_title">PROFILE</h1>

  <div id="profile_container_divider">
    <div class="profile_container_info">
      <div id="profile_profilepic">
        <img src="..\image\placeholder123.png" alt="placeholder">
      </div>
      <div id="profile_picture">
        <form class="" action="index.html" method="post">
            <p>Add or Edit your profile picture</p>
            <input id="profile_addpicture" type="file" name="profile_photo" placeholder="Photo"
             accept=".png" required="" capture>
            <input type="submit" value="Upload">
            <p>You can only add .PNG files</p>
        </form>
      </div>
    </div>
    <div class="profile_container_info">
      <div id="profile_infobox">
        <form class="" action="<?php echo site_url("profile/infobox")?>" method="post">
          <textarea id="profile_infobox_edit" wrap="hard" maxlength="800" rows="20" cols="50" name="comment"
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
      </div>

    </div>
  </div>
</div>
