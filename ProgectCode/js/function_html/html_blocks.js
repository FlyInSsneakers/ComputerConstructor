var i= 0;

function writeBlock(arr){
	var rezultBlocks = "";
	for (var i = 1; i <= arr.length - 1; i++) {
		rezultBlocks += Block(arr[i]);
	}
	return rezultBlocks;
}

function Block(arrBlock){

var block ="<form> <div class='component_box'>"+
			"<div class='row' style='margin: 0px;'>"+
				"<div class='col-lg-3 not_padd'>"+
					"<div class='container_box'>"+
						"<div class='box'>"+
							"<img class='my_img' id = 'next' src='"+
							arrBlock[1] +"alt=''>"+
						"</div>"+
					"</div>"+
				"</div>"+
				"<div  class='col-lg-5' style='padding-right: 0;'>"+
					"<div class='container_box'>"+
						"<div class='box'>"+
							"<div>"+
								"<h5>"+arrBlock[0]+"</h5>"+
								
							"</div>"+
						"</div>"+
					"</div>"+
				"</div>"+
				"<div  class='col-lg-2 not_padd'>"+
					"<div class='container_box'>"+
						"<div class='box'>"+
							"<div>"+
								"<h5>Цена: "+arrBlock[2]+"<br>	</h5>"+
								"<h5>"+arrBlock[3]+"</h5>"+
							"</div>"+
						"</div>"+
					"</div>"+
				"</div>"+
				"<div class='col-lg-2 not_padd'>"+			
					"<div class='container_box' style='border-right: none;'>"+
						"<div class='box'>"+
						"<input name = 'but' reader value="+arrBlock[3]+" style='display: none;'></input>"+
							"<button type='button' class='butt' name= 'but' value = "+arrBlock[3]+">В избранное</button>"+
							"<h5></h5>"+
						"</div>"+
					"</div>"+
				"</div>"+
			"</div>"+							
		"</div> </form>";
	return block;
}


function browsing(arr){
	var left = arr[0] - 1;
	var right = Number(arr[0]) + 1;
	var last = arr[1];

	var block = "<div class='row'>"+
		"<button type='button' class='butt ml-auto mr-auto' id='left_but'>left</button>"+	
		"<input id='left_but' type='hidden' name='current_page' value="+left+" />"+
		"<label>"+
			"<input name='current_page' value="+arr[0]+" style='display:none;'>Текущая: "+arr[0]+""+ 
		"</label>"+
		"<label>"+
			"<input id='last_page' name='last_page' value="+last+" style='display:none;'>Последняя: "+last+""+ 
		"</label>"+
		"<button type='button' class='butt ml-auto mr-auto' id='right_but'>right</button>"+
		"<input  id='right_but' type='hidden' name='current_page' value="+right+" />"+
	"</div>";

	return block;
}