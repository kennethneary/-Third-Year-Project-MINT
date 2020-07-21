$(document).ready(function() {
	
	// hide log in status whem page is first loaded
	$("#login_status").hide();

	
	$("#login").click(function() {
		
		// get entered username, password, and remember me status
		var action = $("#login_form").attr('action');
		var login_data = {
			username: $("#username").val(),
			password: $("#password").val(),
			rememberme: $("#rememberme").val(),
			is_ajax: 1
		};
		
		$.ajax({
			type: "POST",
			url: action,
			data: login_data,
			success: function(response)
			{
				// depending on the response doLogin.php dispaly one of the following mwssages or reload the page 
				if(response == 'error1')
					$("#login_status").html("Username or Password Invalid!").fadeIn(1000);	
					
				if(response == 'error2')
					$("#login_status").html("All fields not completed!").fadeIn(1000);	
					
				if(response == 'success')
					window.location.reload();	
				
			}
		});
		
		return false;
	});
	
});