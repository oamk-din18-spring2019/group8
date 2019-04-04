function battle_selections()
{
  var game1 = 0;
  var game2 = 0;
  var winner = "";

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
    winner = "game1";
  }
  else if (game2 > game1) {
    winner = "game2";
  }

  if ((game1+game2)<5) {
    console.log("WINNER NOT SELECTED");

  }
  else {
      console.log("winner is "+ winner);
  }


  console.log("game1 = "+game1);
  console.log("game2 = "+game2);

}
