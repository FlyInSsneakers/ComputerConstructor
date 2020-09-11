$.getScript("js/function_html/html_blocks.js");

$(document).ready(function() {



	var example = document.getElementById("canvas"),
	ctx     = example.getContext('2d');

	example.width  = $('#canvas').parent().width();
	example.height = $('#canvas').parent().height();

	ctx.strokeStyle="#000";
	ctx.lineWidth = 1.8;

	var allBlock = createCanvas(ctx, example);
	

	var color = new Array();

	$.ajax({
		url: '../php/session/checkConstruction.php',
		method: 'post',
		dataType: 'json',
		success: function(data){
			color = data;
			// alert(color);
			for (var i = color.length - 1; i >= 0; i--) {
				for (var k = allBlock.length - 1; k >= 0; k--) {	
					if (color[i][0] == allBlock[k].getName()) {
						allBlock[k].changeColor("green");
						allBlock[k].changeN(color[i][2]);
					}
				}
			}
			$('#rezult').html(WriteRezult(color));
			draw(ctx, allBlock);
		}
	});


	draw(ctx, allBlock);

	$("#canvas").mousemove(function(event){
		colorWork(ctx, "orange" ,event.offsetX, event.offsetY, allBlock);
	});



	$("#canvas").mousedown(function(event){

		var name = colorWork(ctx, "red" ,event.offsetX, event.offsetY, allBlock);
		$.ajax({
			url: '../php/session/transition.php',
			method: 'post',
			dataType: 'text',
			data: {text:name},
			success: function(data){
				alert(data);
				document.location.href = "seach.php";
			}
		});
	});

	$('#rezult').on('click', '.change', function() {	
		$.ajax({
			url: '../php/session/checkConstruction.php',
			method: 'post',
			dataType: 'json',
			data: $(this).closest('form').serialize(),
			success: function(data){
				// $('#rezult').html(WriteRezult(color));
				// draw(ctx, allBlock);
				document.location.href = "designer.php";
			}
		});
	});


});	




function colorWork(ctx, desiredColor, x, y, allBlock){
	var color = new Array();
	for (var i = 0; i < allBlock.length; i++) {
		color.push(allBlock[i].getColor());
	}
	var colorNumber;

	for (var i = allBlock.length - 1; i >= 0; i--) {

		if(allBlock[i].checkPoint(x, y) == 1){
			var colorNumber = i;
			allBlock[i].changeColor(desiredColor);
		}
		else
			allBlock[i].changeColor(color[i]);				
	}
	draw(ctx, allBlock);
	allBlock[colorNumber].changeColor(color[colorNumber]);
	return allBlock[colorNumber].getName();
}

function createCanvas(ctx, example){
	var allBlock = new Array();

	var pBP = new poligon("bp", example.width*0.05, example.height*0.07, example.width*0.15,  example.height*0.15, "BP");
	pBP.addN(0, 0.75, 0.25, 0.25);

	var bpcpu = new PathSet("bpcpu");
	bpcpu.addLine(example.width*0.2, example.height*0.145, example.width*0.25, example.height*0.145, 0, 0, 4,3);
	pBP.addPath(bpcpu);

	var bphdd = new PathSet("bphdd");
	bphdd.addLine(example.width*0.125, example.height*0.07, example.width*0.68, example.height*0.07, 0, 22, 4,0);
	pBP.addPath(bphdd);

	var bpssd = new PathSet("bpssd");
	bpssd.addLine(example.width*0.125, example.height*0.07, example.width*0.875, example.height*0.07, 0, 22, 4,0);
	pBP.addPath(bpssd);

	var bpdrive = new PathSet("bpdrive");
	bpdrive.addLine(example.width*0.125, example.height*0.07, example.width*0.975, example.height*0.07, 0, 22, 4,4);
	bpdrive.addLine(example.width*0.975, example.height*0.07, example.width*0.95, example.height*0.485, 2, 0, 4,1);
	pBP.addPath(bpdrive);

	var bpvideo = new PathSet("bpvideo");
	bpvideo.addLine(example.width*0.07, example.height*0.22, example.width*0.07, example.height*0.79, 3, 0, 4, 0);
	pBP.addPath(bpvideo);

	var bpmather = new PathSet("bpmather")
	bphdd.addLine(example.width*0.56, example.height*0.3,example.width*0.125, example.height*0.07, 0, 22, 0,4);	
	pBP.addPath(bpmather);

	allBlock.push(pBP);

	var pCPU = new poligon("cpu", example.width*0.25, example.height*0.095, example.width*0.1,  example.height*0.10, "CPU");

	var cpucool = new PathSet("cpucool");
	cpucool.addLine(example.width*0.35, example.height*0.145, example.width*0.4, example.height*0.145,1,0,4,3);
	pCPU.addPath(cpucool);

	var cpuvideo = new PathSet("cpuvideo");
	cpuvideo.addLine(example.width*0.27, example.height*0.25, example.width*0.1, example.height*0.79, 3, 0, 4, 0);
	cpuvideo.addLine(example.width*0.27, example.height*0.25, example.width*0.27, example.height*0.195, 3, 0, 4, 2);
	pCPU.addPath(cpuvideo);

	var cpuram = new PathSet("cpuram");
	cpuram.addLine(example.width*0.2, example.height*0.37, example.width*0.2, example.height*0.28, 3, 0, 0, 4);
	cpuram.addLine(example.width*0.2, example.height*0.28, example.width*0.3, example.height*0.195, 1, 0, 4, 2);
	pCPU.addPath(cpuram);

	allBlock.push(pCPU);

	var pColler = new poligon("cooler", example.width*0.4, example.height*0.095, example.width*0.12,  example.height*0.10, "cooler");
	allBlock.push(pColler);

	var pHDD = new poligon("hdd", example.width*0.605,example.height*0.07, example.width*0.15,  example.height*0.15, "HDD");
	pHDD.addN(0.75, 0.75, 0.25, 0.25);
	allBlock.push(pHDD);

	var pSSD = new poligon("ssd", example.width*0.80,example.height*0.07, example.width*0.15,  example.height*0.15, "SSD");
	pSSD.addN(0, 0.75, 0.25, 0.25);
	allBlock.push(pSSD);

	var pDrive = new poligon("drive", example.width*0.80,example.height*0.41, example.width*0.15,  example.height*0.15, "disk drive", 0.22);
	pDrive.addN(0, 0, 0.25, 0.25);
	allBlock.push(pDrive);

	var pVideo = new poligon("video", example.width*0.05,example.height*0.79, example.width*0.25,  example.height*0.17, "Video_card", 0.15);
	pVideo.addN(0, 0, 0.18, 0.25, 0.12);
	// videoaccel.addLine(example.width*0.09, example.height*0.79, example.width*0.26, example.height*0.89, 2, 0, 4, 3);
	// pVideo.addPath(videoaccel);
	allBlock.push(pVideo);



	// var pAccel = new poligon("accel", example.width*0.26,example.height*0.82, example.width*0.2,  example.height*0.14, "accelerator", 0.15);
	// allBlock.push(pAccel);

	var pMother = new poligon("mather", example.width*0.31,example.height*0.3, example.width*0.4,  example.height*0.43, "MotherBoard", 0.15);
	pMother.addN(0, 0.88, 0.12, 0.12, 0.12);
	pMother.addN(0.88, 0, 0.12, 0.12, 0.12);
	pMother.addN(0, 0.585, 0.12, 0.12, 0.12)

	var mothervideo = new PathSet("mothervideo");
	mothervideo.addLine(example.width*0.31, example.height*0.7, example.width*0.2, example.height*0.79, 3, 0, 4, 0);
	pMother.addPath(mothervideo);

	var mothercpu = new PathSet("mothercpu");
	mothercpu.addLine(example.width*0.33, example.height*0.3, example.width*0.33, example.height*0.195, 1, 0, 4, 2);
	pMother.addPath(mothercpu);

	var motherlan = new PathSet("motherlan");
	motherlan.addLine(example.width*0.6, example.height*0.73, example.width*0.6, example.height*0.82, 1, 0, 4, 0);
	pMother.addPath(motherlan);

	var motherhdd = new PathSet("motherhdd");
	motherhdd.addLine(example.width*0.71, example.height*0.325, example.width*0.737, example.height*0.22, 1, 0, 4, 2);
	pMother.addPath(motherhdd);

	var motherssd = new PathSet("motherssd");
	motherssd.addLine(example.width*0.71, example.height*0.325, example.width*0.818, example.height*0.22, 1, 0, 4, 2);
	pMother.addPath(motherssd);

	var motherdrive = new PathSet("motherdrive");
	motherdrive.addLine(example.width*0.71, example.height*0.325, example.width*0.818, example.height*0.41, 1, 0, 4, 0);
	pMother.addPath(motherdrive);

	var motherram = new PathSet("motherram");
	motherram.addLine(example.width*0.2, example.height*0.53, example.width*0.31, example.height*0.58, 2, 0, 2, 4);
	pMother.addPath(motherram);

	allBlock.push(pMother);

	var pLan = new poligon("lan", example.width*0.51, example.height*0.82, example.width*0.2,  example.height*0.14, "LAN card", 0.15);
	allBlock.push(pLan);

	var pRAM = new poligon("ram", example.width*0.13, example.height*0.37, example.width*0.15,  example.height*0.16, "RAM", 0.18);	
	pRAM.addN(0.35,0.75,0.25,0.25);
	allBlock.push(pRAM);



	var pCase = new poligon("case", example.width*0.76, example.height*0.66, example.width*0.2, example.height*0.3, "Case", 0.2);
	pCase.addN(0,0,0.2,0.15);
	pCase.addN(0.4,0,0.2,0.15);
	pCase.addN(0.8,0,0.2,0.15);
	allBlock.push(pCase);

	return allBlock;
}

function draw(ctx, allBlock){
	ctx.clearRect(0, 0, $('#canvas').parent().width(), $('#canvas').parent().height());
	for (var i = allBlock.length - 1; i >= 0; i--) {
		allBlock[i].draw(ctx);
	}
}



class poligon{

	constructor(name, x, y, width, height, text, font = 0.3){
		this.name = name;
		this.x = x;
		this.y = y;
		this.xEnd = x + width;
		this.yEnd = y + height;
		this.width = width;
		this.height = height;
		this.color = "black";
		this.text = text;
		this.font = font;
		this.nArray = new Array();
		this.pathSetArray = new Array();
		this.N = "n";

	}

	draw(ctx){
		ctx.strokeStyle = this.color;
		ctx.fillStyle = this.color;
		ctx.font = this.font*this.width+"px serif";
		ctx.textAlign = "center";
		ctx.textBaseline = "middle";
		ctx.strokeRect(this.x, this.y, this.width, this.height);
		ctx.fillText(this.text, this.x + this.width*0.5, this.y + this.height*0.5);
		// ctx.font = this.font*this.width*0.2+"px serif";
		for (var i = this.nArray.length - 1; i >= 0; i--) {
			ctx.font = this.width* this.nArray[i][4] + "px serif";
			ctx.strokeRect(this.nArray[i][0],this.nArray[i][1],this.nArray[i][2],this.nArray[i][3]);
			ctx.fillText(this.N, this.nArray[i][0] + this.nArray[i][2]*0.5,this.nArray[i][1] + this.nArray[i][3]*0.5)
		}
		ctx.textAlign = "start";
		ctx.textBaseline = "bottom";
		for (var i = this.pathSetArray.length - 1; i >= 0; i--) {
			this.pathSetArray[i].drawPath(ctx);
		}
		// ctx.strokeStyle = "#000";
	}

	checkPoint(x, y){
		// alert(x , y );
		if(x >= this.x && x <= this.xEnd && y >= this.y && y <= this.yEnd)
			return 1;
		else
			return 0
	}

	changeColor(color){
		this.color = color;
	}

	changeN(n){
		this.N = n;
	}

	addN(one,two, three, four, font=0.17){
		this.nArray.push([this.x+this.width*one, this.y+this.height*two, this.width*three, this.height*four, font]);
	}

	addPath(path){
		this.pathSetArray.push(path);
	}

	getColor(){
		return this.color;
	}

	getName(){
		return this.name;
	}

}



class PathSet {

	constructor(name){
		this.name = name;
		this.pathArray = new Array(); 
	}

	addLine(xOne,yOne, xTwo, yTwo, axis, indent,pointerOne=4,pointerTwo=4){
		this.pathArray.push([xOne,yOne, xTwo, yTwo, axis, indent,pointerOne, pointerTwo]);
		// alert(this.name);
	}

	drawPath(ctx) {
		for (var i = this.pathArray.length - 1; i >= 0; i--) {
			rectPath(ctx, this.pathArray[i][0], this.pathArray[i][1], this.pathArray[i][2], this.pathArray[i][3], 
				this.pathArray[i][4], this.pathArray[i][5], this.pathArray[i][6], this.pathArray[i][7]);
		}
	}

}


function rectPath(ctx, xOne,yOne, xTwo, yTwo, axis, indent,pointerOne=4,pointerTwo=4){


	var point = [ [0, -1], [1, 0], [0 , 1], [-1, 0] ];

	var Difference = indent;
	if (axis % 2 == 0) {
		if (axis==0) {
			if (yOne > yTwo) {
				Difference = (yOne - yTwo) + indent; 
			}
			else
				Difference = (yTwo - yOne) + indent;
		}
		else{
			if (yOne < yTwo) {
				Difference = (yTwo - yOne) + indent; 
			}
			else
				Difference = (yOne - yTwo) + indent;
		}
	}
	else{
		if (axis==1) {
			if (xOne > xTwo) {
				Difference = (xOne - xTwo) + indent; 
			}
			else{
				Difference = (xTwo - xOne) + indent;
			}

		}
		else{
			if (xOne < xTwo) {
				Difference = (xTwo - xOne) + indent; 
			}
			else
				Difference = (xOne - xTwo) + indent; 
		}	
	}

	ctx.beginPath();
	ctx.lineTo(xOne, yOne);					//первая точка
	ctx.lineTo(xOne + Difference*point[axis][0], yOne + Difference*point[axis][1]);							//вторая
	ctx.lineTo(xTwo + indent*point[axis][0], yTwo + indent*point[axis][1]);					//третья
	ctx.lineTo(xTwo, yTwo);					//конечная
	ctx.stroke();


	
	var act = [ [0,-2,-3,-9,3,-9], [2,0,9,-3,9,3], [0,2,-3,9,3,9], [-2,0,-9,-3,-9,3] ];

	if (pointerOne!=4) {
		ctx.beginPath();
		ctx.lineTo(xOne + act[pointerOne][0], yOne + act[pointerOne][1]);
		ctx.lineTo(xOne + act[pointerOne][2], yOne + act[pointerOne][3]);
		ctx.lineTo(xOne + act[pointerOne][4], yOne + act[pointerOne][5]);
		ctx.fill();
		ctx.closePath();
		ctx.stroke();
	}
	if (pointerTwo!=4) {
		ctx.beginPath();
		ctx.lineTo(xTwo + act[pointerTwo][0], yTwo + act[pointerTwo][1]);
		ctx.lineTo(xTwo + act[pointerTwo][2], yTwo + act[pointerTwo][3]);
		ctx.lineTo(xTwo + act[pointerTwo][4], yTwo + act[pointerTwo][5]);
		ctx.fill();
		ctx.closePath()
		ctx.stroke();
	}
}