$(document).ready(function() {


	$('form').on('click', '#in', function() {	
		$.ajax({
			url: '../php/user/registration.php',
			method: 'post',
			dataType: 'text',
			data: $("form").serialize(),
			success: function(data){
				// alert(data);
				if (data=="") {
					document.location.href = "../account.php";
				}
				else
					alert(data);

			}
		});
	});

});