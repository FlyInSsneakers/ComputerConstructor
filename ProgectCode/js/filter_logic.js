	$.getScript("js/function_html/html_blocks.js"); 

	$.ajax({
		url: '../php/test.php',
		method: 'post',
		dataType: 'json',
		data: $("#form_attribute").serialize(),
		success: function(data){
					// $('.message').html(data);
					$('.message').html(writeBlock(data));
					$('.browsing').html(browsing(data[0]));
				}
			});

	$('[name="type_component"]').change(function() {

		$.ajax({
			url: '../php/test.php',
			method: 'post',
			dataType: 'json',
			data: $("#form_attribute").serialize(),
			success: function(data){
					// $('.message').html(data);
					$('.message').html(writeBlock(data));
					$('.browsing').html(browsing(data[0]));
				}
			});

	});

	$('#seach_form').submit(function(){

		alert('Нажата submit-кнопка');
		$.ajax({
			url: '../php/test.php',
			method: 'post',
			dataType: 'json',
			data: $("#seach_form, #form_attribute").serialize(),
			success: function(data){
					// $('.message').html(data);
					$('.message').html(writeBlock(data));
					$('.browsing').html(browsing(data[0]));
				}
			});

		return false;
	});


	$('#form_page').on("click", "#right_but",  function(){
		
		test = $("#form_attribute, #form_page").serialize();
		$.ajax({
			url: '../php/test.php',
			method: 'post',
			dataType: 'json',
			data: $("#form_attribute, #right_but, #last_page").serialize(),
			success: function(data){
				// alert("блять");
				$('.message').html(writeBlock(data));
				$('.browsing').html(browsing(data[0]));
			}
		});
	});


	$('#form_page').on("click", "#left_but",  function(){
		var NonFormValue = 5;
		// block = {name: "e",value: "5"};
		$.ajax({
			url: '../php/test.php',
			method: 'post',
			dataType: 'json',
			data: $("#form_attribute, #left_but, #last_page").serialize(),
			success: function(data){
				// alert("блять");
				$('.message').html(writeBlock(data));
				$('.browsing').html(browsing(data[0]));
			}
		});
	});


	$('[name="producer_gc[]"]').change(function() {
		$.ajax({
			url: '../php/test.php',
			method: 'post',
			dataType: 'json',
			data: $("#form_attribute").serialize(),
			success: function(data){
				$('.message').html(writeBlock(data));
				$('.browsing').html(browsing(data[0]));				
			}
		});
	});

	$('#price0').change(function() {
		$.ajax({
			url: '../php/test.php',
			method: 'post',
			dataType: 'json',
			data: $("#form_attribute").serialize(),
			success: function(data){
				$('.message').html(writeBlock(data));
				$('.browsing').html(browsing(data[0]));
			}
		});
	});

	$('#price1').change(function() {
		$.ajax({
			url: '../php/test.php',
			method: 'post',
			dataType: 'json',
			data: $("#form_attribute").serialize(),
			success: function(data){
				$('.message').html(writeBlock(data));
				$('.browsing').html(browsing(data[0]));
			}
		});
	});


	$('#slider-range').bind('mouseup', function() {
		$.ajax({
			url: '../php/test.php',
			method: 'post',
			dataType: 'json',
			data: $("#form_attribute").serialize(),
			success: function(data){
				$('.message').html(writeBlock(data));
				$('.browsing').html(browsing(data[0]));
			}
		});
	});

	$('.message').on('click', '.butt', function() {	
		$.ajax({
			url: '../php/session.php',
			method: 'post',
			dataType: 'text',
			data: $(this).closest('form').serialize(),
			success: function(data){
				document.location.href = "designer.php";
			}
		});
		// document.location.href = "designer.php";
	});
