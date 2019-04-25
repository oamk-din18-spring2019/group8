<div id="minigame_container">
    <h1 id="minigame_title">Minigame</h1>
  <div id="minigame_games">
    <div id="minigame_game1">
      <div>
      <?php
      foreach ($game1 as $row) {
          echo '<p>'.$row['game'].'</p>';
          echo '<p style="display:none;" id="game1_id">'.$row['id'].'</p>';
          echo '<p style="display:none;" id="game1_elo">'.$row['elo'].'</p>';
          echo '<p style="display:none;" id="game1_name">'.$row['game'].'</p>';
          echo '<p style="display:none;" id="game1_ranking">'.$row['ranking'].'</p>';
          echo '<p style="display:none;" id="game1_genreranking">'.$row['genreranking'].'</p>';
          echo '<p style="display:none;" id="game1_genreelo">'.$row['genreelo'].'</p>';
          echo '<p style="display:none;" id="game1_genre">'.$row['genre'].'</p>';}
      ?>
    </div>
    <?php foreach ($game1 as $row) {?>
    <img class="battle_images" src="..\image\gamepictures\gamepicture<?php echo $row['id'];}?>.png" alt="">
  </div>
  <div id="minigame_ratings">
    <form id="minigame_form">
      <p id="minigame_winnerannounce">Which game has higher ELO rating?</p>
        <table>
          <tr>
            <td><input type="button" name="value1" onclick="minigame_winner1();" id="minigame_value1" value="GAME 1" class="minigame_radiobutton"></td>
            <td> <p id="minigame_vs"> VS </p> </td>
            <td><input type="button" name="value1" onclick="minigame_winner2();" id="minigame_value2" value="GAME 2" class="minigame_radiobutton"></td>
          </tr>
        </table>
      </form>
  </div>
    <div id="minigame_game2">
      <div class="">


      <?php
      foreach ($game2 as $row) {
          echo '<p>'.$row['game'].'</p>';
          echo '<p style="display:none;" id="game2_id">'.$row['id'].'</p>';
          echo '<p style="display:none;" id="game2_elo">'.$row['elo'].'</p>';
          echo '<p style="display:none;" id="game2_name">'.$row['game'].'</p>';
          echo '<p style="display:none;" id="game2_ranking">'.$row['ranking'].'</p>';
          echo '<p style="display:none;" id="game2_genreranking">'.$row['genreranking'].'</p>';
          echo '<p style="display:none;" id="game2_genreelo">'.$row['genreelo'].'</p>';
          echo '<p style="display:none;" id="game2_genre">'.$row['genre'].'</p>';}
      ?>
    </div>
    <?php foreach ($game2 as $row) {?>
    <img class="battle_images" src="..\image\gamepictures\gamepicture<?php echo $row['id'];}?>.png" alt="">
    </div>
  </div>
  <div class="">
    <div style="display: none !important;">
      <?php
    foreach ($user as $row) {
        echo '<p style="display: none !important;" id="user_id">'.$row['id'].'</p>';
        echo '<p style="display: none !important;" id="user_username">'.$row['username'].'</p>';
        echo '<p style="display: none !important;" id="user_password">'.$row['password'].'</p>';
        echo '<p style="display: none !important;" id="user_groupid">'.$row['groupid'].'</p>';
        echo '<p style="display: none !important;" id="user_userpoints">'.$row['userpoints'].'</p>';
        echo '<p style="display: none !important;" id="user_ranking">'.$row['ranking'].'</p>';
        echo '<p style="display: none !important;" id="user_infobox">'.$row['infobox'].'</p>';}
    ?>
   </div>
    <form class="input_form" name="submitusereloid" id="submitusereloid" action="<?php echo site_url("minigame/submit_userelo"); ?>" method="post">
        <input style="display: none !important;" type="number" id="submit_userid_js" name="id" value="" readonly="readonly">
        <input style="display: none !important;" type="text" id="submit_username_js" name="username" value="" readonly="readonly">
        <input style="display: none !important;" type="text" id="submit_password_js" name="password" value="" readonly="readonly">
        <input style="display: none !important;" type="number" id="submit_groupid_js" name="groupid" value="" readonly="readonly">
        <input style="display: none !important;" type="number" id="submit_userpoints_js" name="userpoints" value="" readonly="readonly">
        <input style="display: none !important;" type="number" id="submit_userranking_js" name="ranking" value="" readonly="readonly">
        <input style="display: none !important;" type="text" id="submit_userinfobox_js" name="infobox" value="" readonly="readonly">

    </form>
<button type="submit" form="submitusereloid" name="button" style="display: none !important" class="battle_button" id="minigame_nextbutton">NEXT GAMES</button>

  </div>

</div>
