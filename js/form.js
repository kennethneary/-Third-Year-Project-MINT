$(document).ready(function() {
	
	// hide message when page is first loaded
	$("#Message").hide();


	$("#form_submit").click(function(e) {
	
		e.preventDefault();
		
		// get the infromation submitted from the contact form
		var errors = '';
		var name = $("#form_name").val();     
		var email = $("#form_email").val();    
		var text = $("#form_msg").val();
		var email_submit = $("#email_submit").val();
		var human = $("#human").val();
		
		// check that all fields were filled in correctly
		// if field not completed correctly add a n error message to the error variable
		if ( name ='' || name.length <= 2 ){
			errors += '<p>The Name you entered does not appear to be valid.</p>';		
		}
		
		if ( !email.match(/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/) ){
			errors += '<p>The Email address you entered does not appear to be valid.</p>';	
		}
		
		if ( text.length <= 2 ){
			errors += '<p>The Message you entered does not appear to be valid.</p>';
		}
		
		if ( email_submit != 'http://' ||  human != '' ){
			errors += 'Spam dectected';
		}
	
		if ( errors != '' ){
			$("#Message").removeClass().addClass('error')
				.html('<strong>We are sorry, but there were error(s) found with the message you submitted.</strong>'+errors).fadeIn('slow');
		}
		
		// if no error occured the display processing message and serialize the form data
		// send the data to the submitForm AJAX function
		else{
			$("#Message").removeClass().addClass('success')
				.html('Your message is being sent. Please wait....').fadeIn('slow');
			var form_data = $("#form").serialize();
			submitForm(form_data);
		}
		
		
		
		
	});
	
});

function submitForm(form_data){
	
	$.ajax({
		
		type: 'POST',				
		url: 'data/feedback.php',	// address to send data to
		data: form_data,			// data to be sent
		dataType: 'json',			// datatype to be retrieved
		success: function(data){
		
			// dispaly an success or error message depending on data returned from feedback.php  
			$("#Message").removeClass().addClass((data.error === true) ? 'error' : 'success')
				.html(data.msg).fadeIn('slow');	
			
			// fade out sent message
			if ($("#Message").hasClass('success')) {	
				setTimeout("$('#Message').fadeOut('fast')", 10000);
			}
		}
		
		
	});
	

};