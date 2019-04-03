function show_login()
{
    document.getElementById("login_box").style.display = "flex";
    document.getElementById("no_account").style.display = "flex";
    document.getElementById("register_box").style.display = "none";
    document.getElementById("login_buttons").style.display = "none";
    document.getElementById("form_error").style.display = "none";
}

function show_register()
{
    document.getElementById("register_box").style.display = "flex";
    document.getElementById("no_account").style.display = "none";
    document.getElementById("login_box").style.display = "none";
    document.getElementById("login_buttons").style.display = "none";
    document.getElementById("form_error").style.display = "none";
}