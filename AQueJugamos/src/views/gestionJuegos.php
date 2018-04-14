<!DOCTYPE html>
<html>
  <?php include __DIR__."/head.html"; ?>
  <body>

  	<?php include __DIR__."/header.php"; ?>

  	<!-- ******** BUSCADOR *********-->

  	<div class="container">
		<div class="row">
	        <div class="col-md-6">
	    		<h2>Busca el juego a modificar:</h2>
	            <div id="custom-search-input">
	                <div class="input-group col-md-12">
	                    <input id="inputNombreJuego" type="text" class="form-control input-lg" placeholder="Buscar" />
	                    <span class="input-group-btn">
	                        <button class="btn btn-info btn-lg" type="button" id="botonBuscarJuego">
	                            <i class="glyphicon glyphicon-search"></i>
	                        </button>
	                    </span>
	                </div>
	            </div>
	        </div>
		</div>
	</div>

	<!-- ********************************-->

	<span id="botonAnadirJuego" class="btn btn-info btn-lg botonAddGame">
      <span class="glyphicon glyphicon-plus"></span> Añadir juego
    </span>

	<!-- content -->
	<section id="apartadoJuegos">
		<?php if(isset($_GET['insert'])):
    		if($_GET['insert'] == 1): ?>
	    		<div class="alert alert-success">
				  <strong>Se ha insertado el juego correctamente! <a class="alert-success" href="index.php?action=gestion-juego" >Pulsa aquí para volver a cargar los juegos </a>.
				</div>
		<?php 	else: ?>
					<div class="alert alert-danger">
					  <strong>Error! Ha habido algun error al insertar a la base de datos.</strong> <a class="alert-danger" href="index.php?action=gestion-juego" >Pulsa aquí para volver a cargar los juegos </a>.
					</div>
		<?php 
			endif;

			else: include __DIR__.'/tablaJuegos.php'; 
			
			endif;
		?>

	</section>

	<?php
    	include __DIR__.'/footer.html';
	?>

  </body>
</html>
