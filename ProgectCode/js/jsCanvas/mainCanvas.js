$(document).ready(function() {

	var example = document.getElementById("canvas"),
	ctx     = example.getContext('2d');
	example.width  = $('#canvas').parent().width();
	example.height = $('#canvas').parent().height();
	ctx.strokeStyle="#000";
	rectPowerSupply(ctx, example.width*0.05, example.height*0.07, example.width*0.15,  example.height*0.15);
	rectCPU(ctx, example.width*0.28, example.height*0.095, example.width*0.10,  example.height*0.10);
	
});


function rectPowerSupply(ctx, x, y, width, height){

	ctx.lineWidth = 1.8;
	ctx.strokeRect(x, y, width, height);
	ctx.font = width*0.3+"px serif";
	ctx.fillText("БП",x+width*0.30, y+height*0.60, width*0.50);

	ctx.lineWidth = 1.1;
	ctx.font = width*0.3+"px serif";
	ctx.strokeRect(x+width*0.75, y, width*0.25, height*0.25);	
	ctx.fillText("n",x+width*0.80, y+height*0.22, width*0.25);

	ctx.strokeRect(x, y+height*0.75, width*0.25, height*0.25);
	ctx.fillText("n",x+width*0.05, y+height*0.96, width*0.25);

}

function rectCPU(ctx, x, y, width, height){

	ctx.lineWidth = 1.8;
	ctx.strokeRect(x, y, width, height);
	ctx.font = width*0.3+"px serif";
	ctx.fillText("CPU",x+width*0.22, y+height*0.60, width*0.70);
}