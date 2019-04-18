function battle_selections()
{
  var game1 = 0;
  var game2 = 0;
  var game1_add = 0;
  var game2_add = 0;
  var winner = "";
  var game1_winner = document.getElementById("game1_id").textContent;
  var game2_winner = document.getElementById("game2_id").textContent;
  var game1_name = document.getElementById("game1_name").textContent;
  var game2_name = document.getElementById("game2_name").textContent;
  var game1_ranking = Number(document.getElementById("game1_ranking").textContent);
  var game2_ranking = Number(document.getElementById("game2_ranking").textContent);
  var game1_genreranking = Number(document.getElementById("game1_genreranking").textContent);
  var game2_genreranking = Number(document.getElementById("game2_genreranking").textContent);
  var game1_elo = Number(document.getElementById("game1_elo").textContent);
  var game2_elo = Number(document.getElementById("game2_elo").textContent);
  var game1_genre = document.getElementById("game1_genre").textContent;
  var game2_genre = document.getElementById("game2_genre").textContent;
  var game1_genreelo = Number(document.getElementById("game1_genreelo").textContent);
  var game2_genreelo = Number(document.getElementById("game2_genreelo").textContent);
  var game1_winchance = 1.0 / (1.0 + Math.pow(10, ((game2_elo-game1_elo) / 400)));
  var game2_winchance = 1.0 / (1.0 + Math.pow(10, ((game1_elo-game2_elo) / 400)));
  var game1_winchance_genre = 1.0 / (1.0 + Math.pow(10, ((game2_genreelo-game1_genreelo) / 400)));
  var game2_winchance_genre = 1.0 / (1.0 + Math.pow(10, ((game1_genreelo-game2_genreelo) / 400)));
  var game1_newelo = 0;
  var game2_newelo = 0;
  var game1_newelogenre = 0;
  var game2_newelogenre = 0;
  var game1_id = document.getElementById("submit_id_js_1");
  var game2_id = document.getElementById("submit_id_js_2");
  var game1_game = document.getElementById("submit_game_js_1");
  var game2_game = document.getElementById("submit_game_js_2");
  var game1_genre_replace = document.getElementById("submit_genre_js_1");
  var game2_genre_replace = document.getElementById("submit_genre_js_2");
  var game1_ranking_replace = document.getElementById("submit_ranking_js_1");
  var game2_ranking_replace = document.getElementById("submit_ranking_js_2");
  var game1_genreranking_replace = document.getElementById("submit_genreranking_js_1");
  var game2_genreranking_replace = document.getElementById("submit_genreranking_js_2");
  var game1_change_elo = document.getElementById("submit_elo_js_1");
  var game2_change_elo = document.getElementById("submit_elo_js_2");
  var game1_change_genreelo = document.getElementById("submit_genreelo_js_1");
  var game2_change_genreelo = document.getElementById("submit_genreelo_js_2");

  if (document.getElementById('battle_value1').checked) {
    game1++;
    game1_add = game1_add + 2;
  }
  if (document.getElementById('battle_value2').checked) {
    game2++;
    game2_add = game2_add + 2;

  }
  if (document.getElementById('battle_value3').checked) {
    game1++;
    game1_add = game1_add + 5;
  }
  if (document.getElementById('battle_value4').checked) {
    game2++;
    game2_add = game2_add = game2_add + 5;
  }
  if (document.getElementById('battle_value5').checked) {
    game1++;
    game1_add = game1_add + 3;
  }
  if (document.getElementById('battle_value6').checked) {
    game2++;
    game2_add = game2_add + 3;
  }
  if (document.getElementById('battle_value7').checked) {
    game1++;
    game1_add = game1_add + 1;
  }
  if (document.getElementById('battle_value8').checked) {
    game2++;
    game2_add = game2_add + 1;
  }
  if (document.getElementById('battle_value9').checked) {
    game1++;
    game1_add = game1_add + 2;
  }
  if (document.getElementById('battle_value10').checked) {
    game2++;
    game2_add = game2_add + 2;
  }

  if (game1 > game2)
  {
    winner = game1_winner;
    if (game1_genre == game2_genre) {
      game1_newelogenre = Math.round (Math.round(game1_genreelo)+(75+game1_add)*(1-game1_winchance_genre));
      game2_newelogenre = Math.round (Math.round(game2_genreelo)+(75-game2_add)*(0-game2_winchance_genre));
      game1_newelo = Math.round (Math.round(game1_elo)+(50+game1_add)*(1-game1_winchance));
      game2_newelo = Math.round (Math.round(game2_elo)+(50-game2_add)*(0-game2_winchance));
    }
    else {
      game1_newelo = Math.round (Math.round(game1_elo)+(50+game1_add)*(1-game1_winchance));
      game2_newelo = Math.round (Math.round(game2_elo)+(50-game2_add)*(0-game2_winchance));
      game1_newelogenre = game1_genreelo;
      game2_newelogenre = game2_genreelo;
    }

  }
  else if (game2 > game1) {
    winner = game2_winner;
      if (game1_genre == game2_genre) {
        game1_newelogenre = Math.round (Math.round(game1_genreelo)+(75-game1_add)*(0-game1_winchance_genre));
        game2_newelogenre = Math.round (Math.round(game2_genreelo)+(75+game2_add)*(1-game2_winchance_genre));
        game2_newelo = Math.round (Math.round(game2_elo)+(50+game2_add)*(1-game2_winchance));
        game1_newelo = Math.round (Math.round(game1_elo)+(50-game1_add)*(0-game1_winchance));
      }
      else {
        game2_newelo = Math.round (Math.round(game2_elo)+(50+game2_add)*(1-game2_winchance));
        game1_newelo = Math.round (Math.round(game1_elo)+(50-game1_add)*(0-game1_winchance));
        game1_newelogenre = game1_genreelo;
        game2_newelogenre = game2_genreelo;
        }
    }

  if ((game1+game2)<5) {
    console.log("WINNER NOT SELECTED");
  }
  else {
      document.getElementById("battle_skipbutton").style.display = "flex";
      document.getElementById("battle_submitbutton").style.display = "none";
      document.getElementById("battle_nextgamesbutton").style.display = "none";
      console.log("winner is "+ winner);
      console.log(game1_newelo);
      console.log(game2_newelo);
      console.log(game1_newelogenre);
      console.log(game2_newelogenre);
      console.log(game1_add);
      console.log(game2_add);
      game1_id.value = game1_winner;
      game2_id.value = game2_winner;
      game1_game.value = game1_name;
      game2_game.value = game2_name;
      game1_genre_replace.value = game1_genre;
      game2_genre_replace.value = game2_genre;
      game1_ranking_replace.value = game1_ranking;
      game2_ranking_replace.value = game2_ranking;
      game1_genreranking_replace.value = game1_genreranking;
      game2_genreranking_replace.value = game2_genreranking;
      game1_change_elo.value = game1_newelo;
      game2_change_elo.value = game2_newelo;
      game2_change_genreelo.value = game2_newelogenre;
      game1_change_genreelo.value = game1_newelogenre;
  }


}

function show_nextgames()
{

    document.getElementById("battle_submitbutton").style.display = "none";
    document.getElementById("battle_skipbutton").style.display = "none";
}

function submitforms()
{
  document.getElementById("submiteloid1").submit();
  document.getElementById("submiteloid2").submit();

}
