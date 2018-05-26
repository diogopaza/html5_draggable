/* drag and drop events
	drag, dragstart, dragenter, dragexit, dragleave, dragover, 

	drag and drop interfaces
	dataTransfer
*/

var dragItem = document.getElementById("dragElement");
var dragItem2 = document.getElementById("dragElement2");
var dropLoc = document.getElementById("dropLocation");

dragItem.ondragstart = function(evt){// this event will be when the user starts dragging the item
	evt.dataTransfer.setData('Key',evt.target.id);
	
	console.log("its dragging..");
}

dropLoc.ondragover = function(evt){

	evt.preventDefault();
	console.log('estou sobre');
}

dropLoc.ondrop = function(evt){//this will be fired when drop the dragged item on the droplocation
	var dropItem = evt.dataTransfer.getData('Key');
	evt.preventDefault();
	console.log("its dropped");
	console.log("dropItem:: " + dropItem);
	var myElement = document.getElementById(dropItem); 
	console.log( myElement);
	var myNewElement = document.createElement('img');
	myNewElement.src = myElement.src; 
	dropLoc.appendChild(myNewElement);



}

