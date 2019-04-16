
<div id="battle_container">
  <h1 id="battle_title">BATTLE</h1>


<div id="battle_games">
  <div id="battle_game1">
    <div>
      <?php
      foreach ($game1 as $row) {
          echo '<p>'.$row['game'].'</p>';
          echo '<p style="display:none;" id="game1_id">'.$row['id'].'</p>';
          echo '<p style="display:none;" id="game1_elo">'.$row['elo'].'</p>';
          echo '<p style="display:none;" id="game1_genreelo">'.$row['genreelo'].'</p>';
          echo '<p style="display:none;" id="game1_genre">'.$row['genre'].'</p>';}
      ?>
    </div>
    <img src="" alt="placeholder">
  </div>
  <div id="battle_ratings">
    <form id="battle_form">
        <table>
          <tr>
            <td><input type="radio" name="value1" id="battle_value1" value="1" class="battle_radiobutton"></td>
            <td><p>Graphics</p></td>
            <td><input type="radio" name="value1" id="battle_value2" value="2" class="battle_radiobutton"></td>
          </tr>
          <tr>
            <td><input type="radio" name="value2" id="battle_value3" value="1" class="battle_radiobutton"></td>
            <td><p>Gameplay</p></td>
            <td><input type="radio" name="value2" id="battle_value4" value="2" class="battle_radiobutton"></td>
          </tr>
          <tr>
            <td><input type="radio" name="value3" id="battle_value5" value="1" class="battle_radiobutton"></td>
            <td><p>Content</p></td>
            <td><input type="radio" name="value3" id="battle_value6" value="2" class="battle_radiobutton"></td>
          </tr>
          <tr>
            <td><input type="radio" name="value4" id="battle_value7" value="1" class="battle_radiobutton"></td>
            <td><p>Community</p></td>
            <td><input type="radio" name="value4" id="battle_value8" value="2" class="battle_radiobutton"></td>
          </tr>
          <tr>
            <td><input type="radio" name="value5" id="battle_value9" value="1" class="battle_radiobutton"></td>
            <td><p>Value</p></td>
            <td><input type="radio" name="value5" id="battle_value10" value="2" class="battle_radiobutton"></td>
          </tr>
        </table>

      </form>

  </div>

  <div id="battle_game2">
    <div class="">
      <?php
      foreach ($game2 as $row) {
          echo '<p>'.$row['game'].'</p>';
          echo '<p style="display:none;" id="game2_id">'.$row['id'].'</p>';
          echo '<p style="display:none;" id="game2_elo">'.$row['elo'].'</p>';
          echo '<p style="display:none;" id="game2_genreelo">'.$row['genreelo'].'</p>';
          echo '<p style="display:none;" id="game2_genre">'.$row['genre'].'</p>';}
      ?>
    </div>
    <img src="" alt="placeholder">
  </div>
</div>
<div id="battle_buttons">
  <button type="button" name="button" class="battle_button" onclick="battle_selections();" id="battle_submitbutton">SUBMIT</button>
  <button type="button" name="button" class="battle_button" onclick="window.location.reload()" id="battle_skipbutton">NEXT/SKIP</button>
</div>






</div>
