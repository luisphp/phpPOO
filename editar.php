<?php 

	require_once "conexion.php";
	require_once "metodosCrud.php";

	$id = $_GET['id'];



			  	$obj = new conectar();
			  	$conexion=$obj->conexion();
			  	$sql="SELECT id_persona,nombre_persona,apellido_apersona,cargo from t_persona WHERE id_persona='$id'";
			  	$result = mysqli_query($conexion,$sql);
			  	$persona = mysqli_fetch_row($result);


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>CRUD php 7 POO</title>

 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 </head>
 <body>

 	<div class="col-md-6">

			

				<h4>Editar Persona</h4>


			<form action="actualizar.php" method="POST" accept-charset="utf-8">
				<div class="row">
					<div class="col-md-6">
						
						<div class="form-group">
						    <label>Nombre</label>
						    <input type="text" class="form-control" name="Nombre" placeholder="Nombre" value="<?php echo $persona["1"] ?>">
					    </div>					
					</div>		
					<div class="col-md-6">
						<div class="form-group">
					    	<label>Apellido</label>
					    	<input type="text" class="form-control" name="Apellido" placeholder="Apellido" value="<?php echo $persona["2"] ?>">
					    </div>					
					</div>

					<div class="col-md-6">
						<div class="form-group">
						    <label>Cargo</label>
						    <input type="text" class="form-control" name="Cargo" placeholder="Cargo" value="<?php echo $persona["3"] ?>">
						</div>				
					</div>		
					<div class="col-md-6">
						<div class="form-group">
							<br>
							<input type="hidden" class="form-control" name="id_persona" value="<?php echo $persona["0"] ?>">
					    	<button type="submit" class="btn btn-primary ">Agregar</button>
					    </div>					
					</div>


				</div>
			  

			</form>
 
 </body>
 </html>