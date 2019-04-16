function battle_selections()
{
  var game1 = 0;
  var game2 = 0;
  var winner = "";
  var game1_winner = document.getElementById("game1_id").textContent;
  var game2_winner = document.getElementById("game2_id").textContent;
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

  if (document.getElementById('battle_value1').checked) {
    game1++;
  }
  if (document.getElementById('battle_value2').checked) {
    game2++;
  }
  if (document.getElementById('battle_value3').checked) {
    game1++;
  }
  if (document.getElementById('battle_value4').checked) {
    game2++;
  }
  if (document.getElementById('battle_value5').checked) {
    game1++;
  }
  if (document.getElementById('battle_value6').checked) {
    game2++;
  }
  if (document.getElementById('battle_value7').checked) {
    game1++;
  }
  if (document.getElementById('battle_value8').checked) {
    game2++;
  }
  if (document.getElementById('battle_value9').checked) {
    game1++;
  }
  if (document.getElementById('battle_value10').checked) {
    game2++;
  }

  if (game1 > game2)
  {
    winner = game1_winner;
    if (game1_genre == game2_genre) {
      game1_newelogenre = Math.round(game1_genreelo)+75*(1-game1_winchance_genre);
      game2_newelogenre = Math.round(game2_genreelo)+75*(0-game2_winchance_genre);
      game1_newelo = Math.round(game1_elo)+50*(1-game1_winchance);
      game2_newelo = Math.round(game2_elo)+50*(0-game2_winchance);
    }
    else {
      game1_newelo = Math.round(game1_elo)+50*(1-game1_winchance);
      game2_newelo = Math.round(game2_elo)+50*(0-game2_winchance);
      game1_newelogenre = game1_genreelo;
      game2_newelogenre = game2_genreelo;
    }


  }
  else if (game2 > game1) {
    winner = game2_winner;
      if (game1_genre == game2_genre) {
        game1_newelogenre = Math.round(game1_genreelo)+75*(0-game1_winchance_genre);
        game2_newelogenre = Math.round(game2_genreelo)+75*(1-game2_winchance_genre);
        game2_newelo = Math.round(game2_elo)+50*(1-game2_winchance);
        game1_newelo = Math.round(game1_elo)+50*(0-game1_winchance);
      }
      else {
        game2_newelo = Math.round(game2_elo)+50*(1-game2_winchance);
        game1_newelo = Math.round(game1_elo)+50*(0-game1_winchance);
        game1_newelogenre = game1_genreelo;
        game2_newelogenre = game2_genreelo;
        }
    }

  if ((game1+game2)<5) {
    console.log("WINNER NOT SELECTED");

  }
  else {
      console.log("winner is "+ winner);
  }
console.log(game1_newelo);
console.log(game2_newelo);
console.log(game1_newelogenre);
console.log(game2_newelogenre);



}
