
<div id="battle_container">
  <h1 id="battle_title">BATTLE</h1>


<div id="battle_games">
  <div id="battle_game1">
    <div>
      <?php
      foreach ($game1 as $row) {
          echo '<p class="battle_gametitle">'.$row['game'].'</p>';
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
  <div id="battle_ratings">
    <form id="battle_form">
        <table>
          <tr>
            <td><input type="radio" name="value1" id="battle_value1" value="1" class="battle_radiobutton"></td>
            <td><p title="Think about the era when the game was published and at what level the graphics where then.">Graphics</p></td>
            <td><input type="radio" name="value1" id="battle_value2" value="2" class="battle_radiobutton"></td>
          </tr>
          <tr>
            <td><input type="radio" name="value2" id="battle_value3" value="1" class="battle_radiobutton"></td>
            <td><p title="You should compare how good is the game engine and the mechanics of the game.">Gameplay</p></td>
            <td><input type="radio" name="value2" id="battle_value4" value="2" class="battle_radiobutton"></td>
          </tr>
          <tr>
            <td><input type="radio" name="value3" id="battle_value5" value="1" class="battle_radiobutton"></td>
            <td><p title="How much is there to do? Does the other game have multiple good game modes or just a really good story?">Content</p></td>
            <td><input type="radio" name="value3" id="battle_value6" value="2" class="battle_radiobutton"></td>
          </tr>
          <tr>
            <td><input type="radio" name="value4" id="battle_value7" value="1" class="battle_radiobutton"></td>
            <td><p title="How good is the community for the game right now? Does the community help new players or do they make it interesting in otherways?">
              Community</p></td>
            <td><input type="radio" name="value4" id="battle_value8" value="2" class="battle_radiobutton"></td>
          </tr>
          <tr>
            <td><input type="radio" name="value5" id="battle_value9" value="1" class="battle_radiobutton"></td>
            <td><p title="Do you get a solid bang for your buck? Are there microtransactions that give players who pay more and advantage?">Value</p></td>
            <td><input type="radio" name="value5" id="battle_value10" value="2" class="battle_radiobutton"></td>
          </tr>
        </table>

      </form>

  </div>

  <div id="battle_game2">
    <div class="">
      <?php
      foreach ($game2 as $row) {
          echo '<p class="battle_gametitle">'.$row['game'].'</p>';
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
<div id="battle_buttons">
  <button type="button" name="button" class="battle_button" onclick="battle_selections();" id="battle_submitbutton">SUBMIT</button>
  <form class="input_form" style="display: none !important;" name="submiteloid" id="submiteloid" action="<?php echo site_url("battle/submit_elo"); ?>" method="post">
      <input type="number" id="submit_id_js_1" name="id1" value="" readonly="readonly">
      <input type="text" id="submit_game_js_1" name="game1" value="" readonly="readonly">
      <input type="text" id="submit_genre_js_1" name="genre1" value="" readonly="readonly">
      <input type="number" id="submit_ranking_js_1" name="ranking1" value="" readonly="readonly">
      <input type="number" id="submit_genreranking_js_1" name="genreranking1" value="" readonly="readonly">
      <input type="number" id="submit_elo_js_1" name="elo1" value="" readonly="readonly">
      <input type="number" id="submit_genreelo_js_1" name="genreelo1" value="" readonly="readonly">
      <input type="number" id="submit_id_js_2" name="id2" value="" readonly="readonly">
      <input type="text" id="submit_game_js_2" name="game2" value="" readonly="readonly">
      <input type="text" id="submit_genre_js_2" name="genre2" value="" readonly="readonly">
      <input type="number" id="submit_ranking_js_2" name="ranking2" value="" readonly="readonly">
      <input type="number" id="submit_genreranking_js_2" name="genreranking2" value="" readonly="readonly">
      <input type="number" id="submit_elo_js_2" name="elo2" value="" readonly="readonly">
      <input type="number" id="submit_genreelo_js_2" name="genreelo2" value="" readonly="readonly">
  </form>
  <button type="submit" form="submiteloid" name="button" style="display: none !important" class="battle_button" id="battle_skipbutton">NEXT GAMES</button>
</div>
<button class="battle_button" onclick="window.location.reload()" id="battle_nextgamesbutton">NEXT/SKIP</button>



</div>
