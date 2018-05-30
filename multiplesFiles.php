<style>
  img {
    height:75px;
    border: 1px solid #000;
    margin: 10px 5px 0 0;
  }

  .principal{
  	width: 500px;
  	height: 250px;
  	border: 1px solid #000;
  	margin: 15px auto;
  	overflow: auto
  }

  ul{
  	overflow: hidden;
  	list-style: none;
  	

  }
  li{
  	display:inline-block;
  }
</style>


<div class="principal">
	<input type="file" id="myInput"  multiple>
	<ul id="list">
		
	</ul>

</div>

<script type="text/javascript">
	
	function handleFileSelect(evt){
		//evt.preventDefault();
		var files = evt.target.files		
		if(files.length == 0){
			console.log('vazio');
		}else{
			list.innerHTML = "";
			gravar(files);
		}
	}

	function gravar(files){

			for (var i = 0; i < files.length; i++) {
				console.log("Imagem: " + i);
				

					var reader = new FileReader();
					
					reader.onload = ( e ) => {					
						
							var dataURL = e.target.result
							img = document.createElement('img');
							li = document.createElement('li');
							var list = document.getElementById('list')
							img.src = dataURL
							li.appendChild(img)

							list.appendChild(li)


				}

					reader.readAsDataURL(files[i]);

				}
				var list = document.getElementById('list')
				console.log(list)
				
			}

	
		/*
		reader.onload = function(){
			console.log('estou onload');
			var reader = new FileReader();
			var dataURL = reader.result
			
			img = document.createElement('img');
			var list = document.getElementById('list')
			img.src = dataURL
			list.appendChild(img)
		}
		reader.readAsDataURL(files[i]);
	*/
		

		

		
	//

	

		/*
		console.log('mudei')
		for(var i=0,f; f= files[i];i++)
			console.log("F: " + f + "Files: "+ files[i])

			}
		*/
	
	document.getElementById("myInput").addEventListener('change', handleFileSelect, false);

</script>