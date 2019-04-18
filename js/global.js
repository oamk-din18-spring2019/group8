function change_class()
{
  var profile_link = document.getElementById('profile_link')
  var profile_link = document.getElementById('profile_link')
  var profile_link = document.getElementById('profile_link')
  var profile_link = document.getElementById('profile_link')
  var profile_link = document.getElementById('profile_link')
  var profile_link = document.getElementById('profile_link')
  var profile_link = document.getElementById('profile_link')


  if(document.URL.indexOf("profile") >= 0){
      profile_link.className="selected";
    }

  if(document.URL.indexOf("search") >= 0){
      search_link.className="selected";
    }

  if(document.URL.indexOf("battle") >= 0){
      battle_link.className="selected";
    }

  if(document.URL.indexOf("rankings") >= 0){
      rankings_link.className="selected";
    }
  if(document.URL.indexOf("minigame") >= 0){
      minigame_link.className="selected";
    }

  if(document.URL.indexOf("faq") >= 0){
      faq_link.className="selected";
    }

  if(document.URL.indexOf("about") >= 0){
      about_link.className="selected";
    }
}
