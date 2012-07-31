var aWidth, bWidth, cWidth, dWidth, eWidth;
var aColor, bColor, cColor, dColor, eColor;
var offColor = "rgb(255,255,255)";
var onColor = "rgb(118,190,211)";
var Mouse = { //make a globally available object with x,y attributes 
    x: 0,
    y: 0,
    cx: 0,
    cy: 0,
    h: 0
}
var drawInt;
function initPage() {
	aWidth = 40;
	bWidth = 30;
	cWidth = 30;
	dWidth = 20;
	eWidth = 50;
	
	draw();
	var is_chrome = navigator.userAgent.toLowerCase().indexOf('chrome') > -1;
	document.getElementById('wheel').onmousemove = function (event) { // this  object refers to canvas object  
	    Mouse = {
	        x: event.pageX - this.offsetLeft,
	        y: event.pageY - this.offsetTop,
	        cx: Math.abs(250-Mouse.x),
	        cy: Math.abs(250-Mouse.y),
	        h: Math.sqrt((Mouse.cx*Mouse.cx) + (Mouse.cy*Mouse.cy))
	    }
	    //if(is_chrome) {
	    	//Mouse.y-=29;
	    	//Mouse.cy=Math.abs(250-Mouse.y);
	    	//Mouse.h=Math.sqrt((Mouse.cx*Mouse.cx) + (Mouse.cy*Mouse.cy));
	    //}
		console.log("Mouse X: "+Mouse.x+" Mouse Y: "+Mouse.y+" Mouse H:"+Mouse.h);
		draw();
	}
	document.getElementById('wheel').onmouseout = function(event) {
		Mouse.h = 0;
		draw();
	}
}

function degToRad(deg) {
	var rad = deg * Math.PI / 180;
	return rad;
}

function draw(){  
	var canvas = document.getElementById('wheel');  
	if(Mouse.h<245 && Mouse.h>203) {
		console.log("Circle A");
		aWidth = 45;
		bWidth = 30;
		cWidth = 30;
		dWidth = 20;
		eWidth = 50;
		aColor = onColor;
		bColor = offColor;
		cColor = offColor;
		dColor = offColor;
		eColor = offColor;
		canvas.onclick = function() {
			window.location = "/get-connected";
		}
		canvas.style.cursor = "pointer";
	} else if(Mouse.h<174 && Mouse.h > 142) {
		aWidth = 40;
		bWidth = 35;
		cWidth = 30;
		dWidth = 20;
		eWidth = 50;
		aColor = offColor;
		bColor = onColor;
		cColor = offColor;
		dColor = offColor;
		eColor = offColor;
		canvas.onclick = function() {
			window.location = "/testimonials";
		}
		canvas.style.cursor = "pointer";
	} else if(Mouse.h<125 && Mouse.h > 98) {
		aWidth = 40;
		bWidth = 30;
		cWidth = 35;
		dWidth = 20;
		eWidth = 50;
		aColor = offColor;
		bColor = offColor;
		cColor = onColor;
		dColor = offColor;
		eColor = offColor;
		canvas.onclick = function() {
			window.location = "/core-skills";
		}
		canvas.style.cursor = "pointer";
	} else if(Mouse.h<84 && Mouse.h > 61) {
		aWidth = 40;
		bWidth = 30;
		cWidth = 30;
		dWidth = 25;
		eWidth = 50;
		aColor = offColor;
		bColor = offColor;
		cColor = offColor;
		dColor = onColor;
		eColor = offColor;
		canvas.onclick = function() {
			window.location = "/about-middcore"
		}
		canvas.style.cursor = "pointer";
	} else if(Mouse.h<48&&Mouse.h!=0) {
		aWidth = 40;
		bWidth = 30;
		cWidth = 30;
		dWidth = 20;
		eWidth = 53;
		aColor = offColor;
		bColor = offColor;
		cColor = offColor;
		dColor = offColor;
		eColor = onColor;
		canvas.onclick = function() {
			window.location = "/inside-the-core";
		}
		canvas.style.cursor = "pointer";
	} else {
		aWidth = 40;
		bWidth = 30;
		cWidth = 30;
		dWidth = 20;
		eWidth = 50;
		aColor = offColor;
		bColor = offColor;
		cColor = offColor;
		dColor = offColor;
		eColor = offColor;
		canvas.style.cursor = "default";
		canvas.onclick = function() {return false;};
	}
	canvas.width = canvas.width;
	if (canvas.getContext){  
		var ctx = canvas.getContext('2d');  
		//Outer Two Circles (CIRCLE A)
		ctx.beginPath();  
		ctx.arc(250,250,225,0,degToRad(360),false);
		ctx.lineWidth = aWidth;
		ctx.strokeStyle = aColor;  
		ctx.stroke(); 
		ctx.closePath();
		ctx.beginPath();  
		ctx.lineWidth = 60;
		ctx.strokeStyle = "rgb(7,20,39)";
		ctx.moveTo(250,250);
		ctx.lineTo(-100,500);
		ctx.moveTo(250,250);
		ctx.lineTo(450,500);
		ctx.stroke();
		ctx.closePath();
		ctx.fillStyle = "rgb(7,20,39)";
		ctx.textAlign = "center";
		ctx.font = "14px sans-serif";
		ctx.fillText("Get Connected",250,30);
		//Inner Circle (Circle B)
		ctx.beginPath();
		ctx.lineWidth = bWidth;
		ctx.strokeStyle = bColor;  
		ctx.arc(250,250,160,degToRad(-30),degToRad(300),false);
		ctx.stroke();
		ctx.closePath();
		ctx.fillStyle = "rgb(7,20,39)";
		ctx.textAlign = "center";
		ctx.font = "14px sans-serif";
		ctx.fillText("Testimonials",250,96);
		// 2nd inner (Circle C)
		ctx.beginPath();
		ctx.lineWidth = cWidth;
		ctx.strokeStyle = cColor;  
		ctx.arc(250,250,110,degToRad(-90),degToRad(130),false);
		ctx.stroke();				
		ctx.closePath();
		ctx.fillStyle = "rgb(7,20,39)";
		ctx.textAlign = "center";
		ctx.font = "14px sans-serif";
		ctx.rotate(.55);
		//ctx.fillText("Core Skills",330,-4);
		drawTextAlongArc(ctx,"COREskills",340,78,100,Math.PI * 0.27);
		ctx.rotate(-.55);
		// 3rd Inner (Circle D)
		ctx.beginPath();
		ctx.lineWidth = dWidth;
		ctx.strokeStyle = dColor;  
		ctx.arc(250,250,70,degToRad(-120),degToRad(110),false);
		ctx.stroke();				
		ctx.closePath();
		//ctx.fillStyle = "red";
		ctx.fillStyle = "rgb(7,20,39)";
		ctx.textAlign = "center";
		ctx.font = "14px sans-serif";
		ctx.rotate(.6);
		drawTextAlongArc(ctx,"About MiddCORE",347,71,70,Math.PI * 0.6);
		ctx.rotate(-.6);
		// 4th Innter (Circle E)
		ctx.beginPath();
		ctx.fillStyle = eColor;  
		ctx.arc(250,250,eWidth,0,degToRad(360),false);
		ctx.fill();				
		ctx.closePath();
		ctx.fillStyle = "rgb(7,20,39)";
		ctx.textAlign = "center";
		ctx.font = "14px sans-serif";
		ctx.fillText("Inside the",250,240);
		ctx.fillText("CORE",250,260);
	}  
}  
function drawTextAlongArc(context, str, centerX, centerY, radius, angle){
    context.save();
    context.translate(centerX, centerY);
    context.rotate(-1 * angle / 2);
    context.rotate(-1 * (angle / str.length) / 2);
    for (var n = 0; n < str.length; n++) {
        context.rotate(angle / str.length);
        context.save();
        context.translate(0, -1 * radius);
        var char = str[n];
        context.fillText(char, 0, 0);
        context.restore();
    }
    context.restore();
}