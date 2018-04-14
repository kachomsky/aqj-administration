<!DOCTYPE html>
<html>
  <?php include __DIR__."/head.html"; ?>
  <body>

  	<?php include __DIR__."/header.php"; ?>

  	<!-- ******** BUSCADOR *********-->

  	<div class="container">
		<div class="row">
	        <div class="col-md-6">
	    		<h2>Busca el juego a eliminar:</h2>
	            <div id="custom-search-input">
	                <div class="input-group col-md-12">
	                    <input type="text" class="form-control input-lg" placeholder="Buscar" />
	                    <span class="input-group-btn">
	                        <button class="btn btn-info btn-lg" type="button">
	                            <i class="glyphicon glyphicon-search"></i>
	                        </button>
	                    </span>
	                </div>
	            </div>
	        </div>
		</div>
	</div>
	<!-- ********************************-->

	<!-- TABLA CON DATOS DE JUEGO -->
	<div class="container">
	  <h2>Juego a eliminar:</h2>
	        
	  <table class="table table-condensed">
	    <thead>
	      <tr>
	        <th>Nombre</th>
	        <th>Tipo</th>
	        <th>Eliminar</th>
	      </tr>
	    </thead>
	    <tbody>
	      <tr>
	        <td>Catán</td>
	        <td>Mesa</td>
	        <td><span class="glyphicon glyphicon-remove" /></td>
	      </tr>
	      <tr>
	        <td>Tres en raya</td>
	        <td>Mesa</td>
	        <td><span class="glyphicon glyphicon-remove" /></td>
	      </tr>
	      <tr>
	        <td>Ajedrez</td>
	        <td>Mesa</td>
	        <td><span class="glyphicon glyphicon-remove" /></td>
	      </tr>
	    </tbody>
	  </table>
	</div>

	<!-- *********** FOOTER *************-->
	<?php
    	include __DIR__.'/footer.html';
	?>

  </body>
</html>
