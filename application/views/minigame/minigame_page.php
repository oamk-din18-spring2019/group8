<div id="minigame_container">
  <h1>Minigame</h1>

  <div id="minigame_games">
    <div id="minigame_game1">
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
    <img src="" alt="placeholder">
  </div>
  <div id="minigame_ratings">
    <form id="minigame_form">
        <table>
          <tr>
            <td><input type="radio" name="value1" id="minigame_value1" value="1" class="minigame_radiobutton"></td>
            <td><p>Which game has higher elo?</p></td>
            <td><input type="radio" name="value1" id="minigame_value2" value="2" class="minigame_radiobutton"></td>
          </tr>
        </table>
      </form>
  </div>

    <div id="minigame_game1">
      <?php
      foreach ($game2 as $row) {
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
      <img src="" alt="placeholder">
    </div>
  </div>

</div>
