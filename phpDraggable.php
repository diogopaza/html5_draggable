<?<?php 

	if(isset($_POST['btn_enviar'])){
		echo 'botao enviar';
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
	<div class="meuForm">
		<form method="POST" action="phpDraggable.php" enctype="multipart/form-data" >
		
		<input type="file" name="arquivos[]" multiple>
		<button name="btn_enviar" type="submit">
			Enviar
		</button>

		</form>
	</div>

		<script type="text/javascript">
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

		</script>

</body>
</html>