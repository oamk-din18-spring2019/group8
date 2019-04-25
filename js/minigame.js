function minigame_winner1()
{
  var game1_elo = document.getElementById("game1_elo").textContent;
  var game2_elo = document.getElementById("game2_elo").textContent;
  var game1_button = document.getElementById("minigame_value1");
  var game2_button = document.getElementById("minigame_value2");
  var next_button = document.getElementById("minigame_nextbutton");
  var vs = document.getElementById("minigame_vs");
  var announce = document.getElementById("minigame_winnerannounce");
  var user_newpoints = Number(0);
  var random = Math.floor(Math.random() * 6) + 2;
  var data_userid = document.getElementById("user_id").textContent;
  var data_username = document.getElementById("user_username").textContent;
  var data_password = document.getElementById("user_password").textContent;
  var data_groupid = Number(document.getElementById("user_groupid").textContent);
  var data_userpoints = Number(document.getElementById("user_userpoints").textContent);
  var data_ranking = Number(document.getElementById("user_ranking").textContent);
  var data_infobox = document.getElementById("user_infobox").textContent;
  var userid = document.getElementById("submit_userid_js");
  var username = document.getElementById("submit_username_js");
  var password = document.getElementById("submit_password_js");
  var groupid = document.getElementById("submit_groupid_js");
  var userpoints = document.getElementById("submit_userpoints_js");
  var ranking = document.getElementById("submit_userranking_js");
  var infobox = document.getElementById("submit_infobox_js");

  console.log(game1_elo);
  console.log(game2_elo);
  if(game1_elo > game2_elo)
  {
    user_newpoints = data_userpoints + random;
    console.log(user_newpoints);
    game1_button.style.display = "none";
    game2_button.style.display = "none";
    next_button.style.display = "flex";
    vs.style.display = "none";
    announce.textContent ="You picked the right game!";
    submit_username_js.value = data_username;
    submit_userid_js.value = data_userid;
    submit_userpoints_js.value = user_newpoints;
    submit_password_js.value = data_password;
    submit_groupid_js.value = data_groupid;
    submit_userranking_js.value = data_ranking;
    submit_userinfobox_js.value = data_infobox;
    submit_password_js.value = data_password;
  }
  if (game2_elo > game1_elo)
  {
    user_newpoints = data_userpoints;
    console.log(user_newpoints);
    game1_button.style.display = "none";
    game2_button.style.display = "none";
    next_button.style.display = "flex";
    vs.style.display = "none";
    announce.textContent ="You picked the wrong game...";
    submit_username_js.value = data_username;
    submit_userid_js.value = data_userid;
    submit_userpoints_js.value = user_newpoints;
    submit_password_js.value = data_password;
    submit_groupid_js.value = data_groupid;
    submit_userranking_js.value = data_ranking;
    submit_userinfobox_js.value = data_infobox;
    submit_password_js.value = data_password;
  }

  else if (game2_elo == game1_elo)
  {
    user_newpoints = data_userpoints + 1;
    console.log(user_newpoints);
    game1_button.style.display = "none";
    game2_button.style.display = "none";
    next_button.style.display = "flex";
    vs.style.display = "none";
    announce.textContent ="Both games had the same ELO, but you'll be awarded one point.";
    submit_username_js.value = data_username;
    submit_userid_js.value = data_userid;
    submit_userpoints_js.value = user_newpoints;
    submit_groupid_js.value = data_groupid;
    submit_password_js.value = data_password;
    submit_userranking_js.value = data_ranking;
    submit_userinfobox_js.value = data_infobox;
    submit_password_js.value = data_password;
  }

}
function minigame_winner2()
{
  var game1_elo = document.getElementById("game1_elo").textContent;
  var game2_elo = document.getElementById("game2_elo").textContent;
  var game1_button = document.getElementById("minigame_value1");
  var game2_button = document.getElementById("minigame_value2");
  var next_button = document.getElementById("minigame_nextbutton");
  var vs = document.getElementById("minigame_vs");
  var announce = document.getElementById("minigame_winnerannounce");
  var user_newpoints = Number(0);
  var random = Math.floor(Math.random() * 6) + 2;
  var data_userid = document.getElementById("user_id").textContent;
  var data_username = document.getElementById("user_username").textContent;
  var data_password = document.getElementById("user_password").textContent;
  var data_groupid = Number(document.getElementById("user_groupid").textContent);
  var data_userpoints = Number(document.getElementById("user_userpoints").textContent);
  var data_ranking = Number(document.getElementById("user_ranking").textContent);
  var data_infobox = document.getElementById("user_infobox").textContent;
  var userid = document.getElementById("submit_userid_js");
  var username = document.getElementById("submit_username_js");
  var password = document.getElementById("submit_password_js");
  var groupid = document.getElementById("submit_groupid_js");
  var userpoints = document.getElementById("submit_userpoints_js");
  var ranking = document.getElementById("submit_userranking_js");
  var infobox = document.getElementById("submit_infobox_js");

  console.log(game1_elo);
  console.log(game2_elo);

  if(game2_elo > game1_elo)
  {
    console.log("GAME 2 IS HIGHER");
    user_newpoints = data_userpoints + random;
    console.log(user_newpoints);
    game1_button.style.display = "none";
    game2_button.style.display = "none";
    next_button.style.display = "flex";
    vs.style.display = "none";
    announce.textContent ="You picked the right game!";
    submit_username_js.value = data_username;
    submit_userid_js.value = data_userid;
    submit_userpoints_js.value = user_newpoints;
    submit_password_js.value = data_password;
    submit_groupid_js.value = data_groupid;
    submit_userranking_js.value = data_ranking;
    submit_userinfobox_js.value = data_infobox;
    submit_password_js.value = data_password;
  }
  if (game1_elo > game2_elo)
  {
    user_newpoints = data_userpoints
    console.log(user_newpoints);
    game1_button.style.display = "none";
    game2_button.style.display = "none";
    next_button.style.display = "flex";
    vs.style.display = "none";
    announce.textContent ="You picked the wrong game...";
    submit_username_js.value = data_username;
    submit_userid_js.value = data_userid;
    submit_userpoints_js.value = user_newpoints;
    submit_password_js.value = data_password;
    submit_groupid_js.value = data_groupid;
    submit_userranking_js.value = data_ranking;
    submit_userinfobox_js.value = data_infobox;
    submit_password_js.value = data_password;
  }

  else if (game2_elo == game1_elo)
  {
    user_newpoints = data_userpoints + 1;
    console.log(user_newpoints);
    game1_button.style.display = "none";
    game2_button.style.display = "none";
    next_button.style.display = "flex";
    vs.style.display = "none";
    announce.textContent ="Both games had the same ELO, but you'll be awarded one point.";
    submit_username_js.value = data_username;
    submit_userid_js.value = data_userid;
    submit_userpoints_js.value = user_newpoints;
    submit_groupid_js.value = data_groupid;
    submit_password_js.value = data_password;
    submit_userranking_js.value = data_ranking;
    submit_userinfobox_js.value = data_infobox;
    submit_password_js.value = data_password;
  }

}
