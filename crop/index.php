<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Crop da imagem</title>
		
		<link rel="stylesheet" href="bootstrap.css">
		<link  href="dist/cropper.css" rel="stylesheet">
		<style>
			
		#avatar, #avatar2 {
		max-width: 50px; /* This rule is very important, please do not ignore this! */
		}
		input, button, select, textarea {
		    font-family: inherit;
		    font-size: inherit;
		    line-height: inherit;
		    padding: 10px;
		    font-size: 16px;
		    color: #000!important;
		}
		</style>
	</head>
	<body>
	
		<form action="recebe.php" method="POST" enctype="multipart/form-data">

			<div class="container">
				<h1>Carregar imagem 01</h1>
				<label class="label" data-toggle="tooltip" title="" data-original-title="Change your avatar">
					<img class="rounded" id="avatar" src="Penguins.jpg" alt="avatar">
					

					<input type="file" class="sr-only" id="input" name="image" accept="image/*">
					<input type="text" id="imagem1" name="imagem1">
				</label>

				
				<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" style="display: none;" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="modalLabel">Cortar a imagem</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Perto">
								<span aria-hidden="true"></span>
								</button>
							</div>
							<div class="modal-body">
								<div class="img-container">
									<img id="image" src="Penguins.jpg" class="">
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
								<button type="button" class="btn btn-primary" id="crop">Colheita</button>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container">
				<h1>Carregar imagem recortada para o servidor 02</h1>
				<label class="label" data-toggle="tooltip" title="" data-original-title="Change your avatar">
					<img class="rounded" id="avatar2" src="Penguins.jpg" alt="avatar">
					<input type="file" class="sr-only" id="input2" name="image2" accept="image/*">
					<input type="hidden" id="imagem2" name="imagem2">
				</label>
				
				<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="modalLabel" style="display: none;" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="modalLabel">Cortar a imagem 02</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Perto">
								<span aria-hidden="true"></span>
								</button>
							</div>
							<div class="modal-body">
								<div class="img-container">
									<img id="image2" src="Penguins.jpg" class="">
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
								<button type="button" class="btn btn-primary" id="crop2">Colheita</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<button type="submit">Enviar</button>
		</form>

		<script src="jquery.js"></script>
		<script src="bootstrap.js"></script>
		<script src="dist/cropper.js"></script>
		<script>

			
    window.addEventListener('DOMContentLoaded', function () {
		var avatar = document.getElementById('avatar');
		var image = document.getElementById('image');
		var input = document.getElementById('input');
		//var $progress = $('.progress');
		//var $progressBar = $('.progress-bar');
		var $alert = $('.alert');
		var $modal = $('#modal');
		var cropper;

	     $('[data-toggle="tooltip"]').tooltip();

      	input.addEventListener('change', function (e) {
        	var files = e.target.files;
	        var done = function (url) {
	          input.value = '';
	          image.src = url;
	          $alert.hide();
	          $modal.modal('show');
	        };
	        var reader;
	        var file;
	        var url;

	        if (files && files.length > 0) {
	          file = files[0];

	          if (URL) {
	            done(URL.createObjectURL(file));
	          } else if (FileReader) {
	            reader = new FileReader();
	            reader.onload = function (e) {
	            	console.log(e);
	              done(reader.result);
	            };
	            reader.readAsDataURL(file);
	          }
	        }
      	});

      	$modal.on('shown.bs.modal', function () {
	        cropper = new Cropper(image, {
	        	viewMode: 1,
	          	dragMode: 'move',
		        aspectRatio: 21.52 / 9, // 600x251
		        // aspectRatio: 8.8 / 7, // 280x222
		        autoCropArea: 2,
		        restore: false,
		        guides: false,
		        center: false,
		        highlight: false,
		        cropBoxMovable: false,
		        cropBoxResizable: false,
		        toggleDragModeOnDblclick: false
	        });
      	}).on('hidden.bs.modal', function () {
        	cropper.destroy();
        	cropper = null;
      	});

      	document.getElementById('crop').addEventListener('click', function () {
        	var initialAvatarURL;
        	var canvas;

        	$modal.modal('hide');

	        if (cropper) {
	          	canvas = cropper.getCroppedCanvas({
	            	width: 600,
	            	height: 255,
	          	});
				initialAvatarURL = avatar.src;
				avatar.src = canvas.toDataURL();
				var imagem = $("#avatar").attr('src');
				$("#imagem1").attr("value", imagem);
				console.log(imagem);
				// $progress.show();
				$alert.removeClass('alert-success alert-warning');
				canvas.toBlob(function (blob) {
		        	var formData = new FormData();
		        });
	        }
	    });
    });

    
//------------------------------------------------------------------- 

    window.addEventListener('DOMContentLoaded', function () {
		var avatar = document.getElementById('avatar2');
		var image = document.getElementById('image2');
		var input = document.getElementById('input2');
		//var $progress = $('.progress');
		//var $progressBar = $('.progress-bar');
		var $alert = $('.alert');
		var $modal = $('#modal2');
		var cropper;

	     $('[data-toggle="tooltip"]').tooltip();

      	input.addEventListener('change', function (e) {
        	var files = e.target.files;
	        var done = function (url) {
	          input.value = '';
	          image.src = url;
	          $alert.hide();
	          $modal.modal('show');
	        };
	        var reader;
	        var file;
	        var url;

	        if (files && files.length > 0) {
	          file = files[0];

	          if (URL) {
	            done(URL.createObjectURL(file));
	          } else if (FileReader) {
	            reader = new FileReader();
	            reader.onload = function (e) {
	              done(reader.result);
	            };
	            reader.readAsDataURL(file);
	          }
	        }
      	});

      	$modal.on('shown.bs.modal', function () {
	        cropper = new Cropper(image, {
	        	viewMode: 1,
	          	dragMode: 'move',
		        //aspectRatio: 21.52 / 9, // 600x251
		        aspectRatio: 8.8 / 7, // 280x222
		        autoCropArea: 2,
		        restore: false,
		        guides: false,
		        center: false,
		        highlight: false,
		        cropBoxMovable: false,
		        cropBoxResizable: false,
		        toggleDragModeOnDblclick: false
	        });
      	}).on('hidden.bs.modal', function () {
        	cropper.destroy();
        	cropper = null;
      	});

      	document.getElementById('crop2').addEventListener('click', function () {
        	var initialAvatarURL;
        	var canvas;

        	$modal.modal('hide');

	        if (cropper) {
	          	canvas = cropper.getCroppedCanvas({
	            	width: 280,
	            	height: 222,
	          	});
				initialAvatarURL = avatar.src;
				avatar.src = canvas.toDataURL();
				var imagem = $("#avatar2").attr('src');
				$("#imagem2").attr("value", imagem);
				console.log(imagem);
				//$progress.show();
				$alert.removeClass('alert-success alert-warning');
				canvas.toBlob(function (blob) {
		        	var formData = new FormData();
		        });
	        }
	    });
    });
  
		
		</script>
	</body>
</html>



