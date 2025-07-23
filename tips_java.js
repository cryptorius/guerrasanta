/***********************************************
* Cool DHTML tooltip script II- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
*
* Modified by Motion-Twin (www.motion-twin.fr) for www.dinoparc.com
***********************************************/


var xOffset=12
var yOffset=10

var ie=document.all
var w3c=document.getElementById && !document.all
var enabletip=false
if (ie||w3c) {
	var tipobj
}


function ietruebody(){
	return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

/*------------------------------------------------------------------------
SHOW TOOLTIP
------------------------------------------------------------------------*/
function showTip(obj, contentBase, title){
	if (w3c||ie){
	
		if( title == null ) {
			title = contentBase;
			contentBase = obj;
		}

		var content = "<p>"+contentBase+"</p>"

		tipobj = document.all? document.all["tooltip"] : document.getElementById? document.getElementById("tooltip") : ""
		tipcontent = document.all? document.all["tooltipContent"] : document.getElementById? document.getElementById("tooltipContent") : ""

		if (typeof title!="undefined") {
			if ( contentBase!="" ) {
				content='<div class="title">'+title+'</div>'+content
			}
			else {
				content='<div class="titleOnly">'+title+'</div>'+content
			}
		}

		tipcontent.innerHTML = content
		enabletip=true

		return false
	}
}


/*------------------------------------------------------------------------
HIDE THE TOOLTIP
------------------------------------------------------------------------*/
function hideTip(){
	if (w3c||ie){
		enabletip=false
//        tipobj.style.visibility="hidden" // avoid the IE6 cache optimisation with hidden blocks
		tipobj.style.top="-1000px"
		tipobj.style.backgroundColor=''
		tipobj.style.width=''
	}
}


/*------------------------------------------------------------------------
ONMOVE EVENT
------------------------------------------------------------------------*/
function moveTip(e){
	if (enabletip){
		var nondefaultpos=false
		var curX=(w3c)?e.pageX : event.x+ietruebody().scrollLeft;
		var curY=(w3c)?e.pageY : event.y+ietruebody().scrollTop;
		//Find out how close the mouse is to the corner of the window
		var winwidth=ie&&!window.opera? ietruebody().clientWidth : window.innerWidth-20
		var winheight=ie&&!window.opera? ietruebody().clientHeight : window.innerHeight-20

		var rightedge=ie&&!window.opera? winwidth-event.clientX-xOffset : winwidth-e.clientX-xOffset
		var bottomedge=ie&&!window.opera? winheight-event.clientY-yOffset : winheight-e.clientY-yOffset

		var leftedge=(xOffset<0)? xOffset*(-1) : -1000

		//if the horizontal distance isn't enough to accomodate the width of the context menu
		if (rightedge<tipobj.offsetWidth){
			//move the horizontal position of the menu to the left by it's width
			tipobj.style.left=curX-tipobj.offsetWidth+"px"
			nondefaultpos=true
		}
		else {
			if (curX<leftedge) {
				tipobj.style.left="5px"
			}
			else{
				//position the horizontal position of the menu where the mouse is positioned
				tipobj.style.left=curX+xOffset+"px"
			}
		}

		//same concept with the vertical position
		if (bottomedge<tipobj.offsetHeight) {
			tipobj.style.top=curY-tipobj.offsetHeight-yOffset+"px"
			nondefaultpos=true
		}
		else{
			tipobj.style.top=curY+yOffset+"px"
		}
	}
}



document.onmousemove=moveTip

