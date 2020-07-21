var current = "current";

$(document).ready(function() {	
	$("#submit").click(function() {
		// tell PHP scripts to restore default values in the location table
		$.ajax({
			type: "POST",
			url: 'data/ajax1.php',
			data: {variable: current},
			dataType: 'json',
			success: function(response)
			{				
				// continue if completion response is received
				if(response.success === true){
					$.ajax({
						type: "POST",
						url: 'data/ajax0.php',
						data: {variable: current},
						dataType: 'json',
						success: function(response)
						{				
							if(response.success === true){
								window.location.reload();	
							}
						}
					});
					
				}
			}
		});	
	
	})
});