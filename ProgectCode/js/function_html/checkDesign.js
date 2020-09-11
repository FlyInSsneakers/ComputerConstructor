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