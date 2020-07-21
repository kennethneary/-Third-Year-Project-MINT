var mouse_is_inside = false;
 
$(document).ready(function() {
	// fade in or out of log out menu when clicked 
    $(".logout_btn").click(function() {
        var loginBox = $("#logout_box");
        if (loginBox.is(":visible"))
            loginBox.fadeOut("fast");
        else
            loginBox.fadeIn("fast");
        return false;
    });
 
    $("#logout_box").hover(function(){ 
        mouse_is_inside=true; 
    }, function(){ 
        mouse_is_inside=false; 
    });
	
	// if clicked outside log out menu fade it out
    $("body").click(function(){
        if(! mouse_is_inside) $("#logout_box").fadeOut("fast");
    });
	
	$("#logout_no").click(function(){
		$("#logout_box").fadeOut("fast");
	 });
	 
	 // find logout.php when log out is confirmed 
	 $("#logout_yes").click(function(){
	 
		$.get("logout.php")
		.done(function() { 
			window.location.href = "logout.php";
		}).fail(function() { 
			window.location.href = "../logout.php";
		})
		
	 });
});