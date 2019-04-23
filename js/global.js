function change_class()
{


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

function change_background()
{

    if(document.URL.indexOf("profile") >= 0){

      }

    if(document.URL.indexOf("search") >= 0){

      }

    if(document.URL.indexOf("battle") >= 0){
      document.body.style.backgroundImage = "url('../image/testiman.png')";
      document.body.style.backgroundRepeat = "no-repeat";
      document.body.style.backgroundPosition = "center center";
      document.body.style.backgroundSize = "cover";
      }

    if(document.URL.indexOf("rankings") >= 0){

      }
    if(document.URL.indexOf("minigame") >= 0){

      }

    if(document.URL.indexOf("faq") >= 0){
      }

    if(document.URL.indexOf("about") >= 0){

      }

}
