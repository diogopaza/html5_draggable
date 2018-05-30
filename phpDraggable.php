<?php 

	if(isset($_POST['btn_enviar'])){
		/*
		for($i=0;$i<count( $_FILES['arquivos']['name'] );$i++ ){
			echo "

				<img src='". $_FILES['arquivos']['tmp_name'][$i] ."' id='". $i ."'>
			";
			$tmp = $_FILES['arquivos']['tmp_name'][$i];
			echo "tmp: " . $tmp."<br>";
			$images = $_FILES['arquivos']['name'][$i];	
			echo $images."<br>";
		}
		*/
		//$file = $_FILES['arquivos']['tmp_name'][0];
		//echo $file."<br>";
		//$src = imagecreatefromjpeg($file);
		//echo $src;
		

	}



 ?>


<!DOCTYPE html>
<html>
<head>
	<title>HTML5 API: Drag and Drop</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<ul>
		<?php 
			for($i=1;$i<=5;$i++) {
				
				echo "
				<li>
					<img src='".$i.".jpg' ondragstart='dragStart(event)' id='".$i."'>
				</li>

			";
			}
			


		 ?>
		
	</ul>


	<div id="dropLocation" ondragover="over(event)" ondrop="drop(event)"></div>
	<div>
		<form method="POST" action="phpDraggable.php" enctype="multipart/form-data" >
		
			<input type="file" name="arquivos[]" id='arquivosImg' multiple >
			<button name="btn_enviar" type="submit">
				Enviarr
			</button>
			<div id="listFiles"></div>
			
	</div>
		
		</form>
	</div>

		<script type="text/javascript">
			
			


			//check FILE API support

			if(window.File && window.FileReader && window.FileList && window.Blob){

				//alert('ok');
			}else{
				alert('The files APIs are not fully supported in this browser ')
			}


			var handleFileSelect = (evt) => {
				var output = [];
				files = event.target.files;
				for(var i=0, f;f  = files[i];i++){
					output.push( '<li><strong>'+ escape(f.name) +'</strong> </li>' )

				}
				
				document.getElementById('listFiles')
				elementFinal = "<ul>" +  output.join('') + "</ul>";
				console.log(elementFinal)
				listFiles.innerHTML = elementFinal
			}

			
			var listarImg = () =>{
				var x =document.getElementById("arquivosImg");
				var newX = document.getElementById(x);
				console.log(x.files[1]);


			}

			var over = function(evt){
				console.log('sobre');
				//evt.dataTransfer.setData('key',evt.target.id);
				evt.preventDefault();
				//console.log(evt.dataTransfer.getData('key'))
				
			}

			var drop = (evt) => {

				var myItem =  evt.dataTransfer.getData( 'key' ) ;
				console.log("myItem: " + myItem);
				var myItemImg = document.getElementById(myItem);
				console.log(myItemImg)
				var myNewItem = document.createElement('img');
					myNewItem.src = myItemImg.src;
					console.log(myNewItem);
				var minhaDiv = document.getElementById("dropLocation")
							   
				console.log(minhaDiv)
				minhaDiv.innerHTML = "";
				minhaDiv.appendChild(myNewItem)

			}

		
			var dragStart = (evt) => {
				console.log('arrastando');
				evt.dataTransfer.setData('key',evt.target.id);
				
			}

			document.getElementById('arquivosImg').addEventListener('change',handleFileSelect, false);
		

		</script>

</body>
</html>