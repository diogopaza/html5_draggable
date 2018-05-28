<style type="text/css">
	
	#dropZone{
		width: 500px;
		height: 300px;
		border:2px solid #000;
	}
</style>

<div id="dropZone">Drope files here</div>
<output id="list"></output>




<script type="text/javascript">

	function handleDragOver(evt){

		console.log('estou sobre');
		
    	evt.preventDefault();
		evt.dataTransfer.dropEffect = 'copy';

	}

	function handleDrop(evt){
		
		
    	evt.preventDefault();

    	var files = evt.dataTransfer.files;
    	console.log(files);

    	var output = [];
    	for(var i=0, f;f= files[i];i++){
    		output.push('<li><strong>'+ escape(f.name) + '</strong></li>')
    	} 
    	document.getElementById('list').innerHTML = '<ul>'+ output.join('') +'</ul>';


	}


	var dropZone = document.getElementById("dropZone")
	dropZone.addEventListener('dragover', handleDragOver,false);
	dropZone.addEventListener('drop', handleDrop,false);
	
</script>