$( "#slider-range" ).slider({
	range: true,
	min: 0,
	max: 50000,
	values: [ 0, 50000 ],
	slide: function( event, ui ) {
		$( "#price0" ).val(ui.values[ 0 ]  );
		$( "#price1" ).val(ui.values[ 1 ])
	}
});

$('#price0').change(function() {
	var val = $(this).val();
	$('#slider-range').slider("values",0,val);
});

$('#price1').change(function() {
	var val = $(this).val();
	$('#slider-range').slider("values",1,val);
});	

$( "#price0" ).val($( "#slider-range" ).slider( "values", 0 ));
$( "#price1" ).val($( "#slider-range" ).slider( "values", 1 ) );

$(".for_mat").hide();
$(".for_cpu").hide();
$(".for_gc").hide();
$(".for_ram").hide();
$(".for_hdd").hide();
$(".for_ssd").hide();

if(!$('#intel').prop("checked") && !$('#amd').prop("checked")){
	$('.for_type_cpu_intel').hide();
	$('.for_type_cpu_amd').hide();
}

$('#next').click(function() {
	alert("ушло");
});

check();

$('[name="type_component"]').change(function() {
	check();
});
$('#intel').change(function(){
	if ($('#intel').prop("checked")) {
		$('.for_type_cpu_intel').fadeIn(300);
		$(".for_type_cpu_intel").find('input[type=checkbox]').prop('checked', true);
	} else {
		$('.for_type_cpu_intel').fadeOut(0);
		$(".for_type_cpu_intel").find('input[type=checkbox]').prop('checked', false);
	}
})
$('#amd').change(function(){
	if ($('#amd').prop("checked")) {
		$('.for_type_cpu_amd').fadeIn(300);
		$(".for_type_cpu_amd").find('input[type=checkbox]').prop('checked', true);
	} else {
		$('.for_type_cpu_amd').fadeOut(0);
		$(".for_type_cpu_amd").find('input[type=checkbox]').prop('checked', false);
	}	
})

$("h5").click(function(){
	$(this).next(".filter_container").slideToggle(500)
	return false;
});


function check(){

	if ($('#mat').prop("checked")) {
		$('.for_mat').fadeIn(300);
	} else {
		$('.for_mat').fadeOut(0);
	}

	if ($('#cpu').prop("checked")) {
		$('.for_cpu').fadeIn(300);
	} else {
		$('.for_cpu').fadeOut(0);
	}

	if ($('#gc').prop("checked")) {
		$('.for_gc').fadeIn(300);
	} else {
		$('.for_gc').fadeOut(0);
	}

	if ($('#ram').prop("checked")) {
		$('.for_ram').fadeIn(300);
	} else {
		$('.for_ram').fadeOut(0);
	}

	if ($('#hdd').prop("checked")) {
		$('.for_hdd').fadeIn(300);
	} else {
		$('.for_hdd').fadeOut(0);
	}

	if ($('#ssd').prop("checked")) {
		$('.for_ssd').fadeIn(300);
	} else {
		$('.for_ssd').fadeOut(0);
	}

}