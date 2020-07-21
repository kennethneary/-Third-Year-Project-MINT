var mouse_is_inside = false;
 
$(document).ready(function() {
// fade in or out of log in menu when clicked 
    $(".login_btn").click(function() {
        var loginBox = $("#login_box");
        if (loginBox.is(":visible"))
            loginBox.fadeOut("fast");
        else
            loginBox.fadeIn("fast");
        return false;
    });
 
    $("#login_box").hover(function(){ 
        mouse_is_inside=true; 
    }, function(){ 
        mouse_is_inside=false; 
    });
	
	// if clicked outside log in menu fade it out
    $("body").click(function(){
        if(! mouse_is_inside) $("#login_box").fadeOut("fast");
    });
});