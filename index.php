<?php 

	require_once "conexion.php";
	require_once "metodosCrud.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD! PHP7 + POO</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>

<div class="container">


	<div class="row">

		<div class="col-md-6">

			

				<h4>Lista de Persona</h4>
				
			

			<table class="table table-striped table-dark table-hover">
			  <thead>
			    <tr>
			      <th scope="col">id</th>
			      <th scope="col">Nombre</th>
			      <th scope="col">Apellido</th>
			      <th scope="col">Cargo</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>

			  <?php 
			  	$obj = new metodos();
			  	$sql="SELECT id_persona,nombre_persona,apellido_apersona,cargo from t_persona";
			  	$datos = $obj->mostrarDatos($sql);

			  	foreach ($datos as $key) {
			  	
			   ?>
			  <tbody>
			    <tr>
			      <th scope="row"><?php echo $key["id_persona"] ?></th>
			      <td><?php echo $key["nombre_persona"] ?></td>
			      <td><?php echo $key["apellido_apersona"] ?></td>
			      <td><?php echo $key["cargo"] ?></td>
			      <td>
			      	<a class="btn btn-sm btn-success" type="" href="editar.php?id=<?php echo $key["id_persona"] ?>">Edit</a>
			      	<a class="btn btn-sm btn-danger" type="" href="eliminar.php?id=<?php echo $key["id_persona"] ?>">Delete</a>


			      </td>
			    </tr>
			<?php 

			}

			 ?>
			  </tbody>
			</table>
			
		</div>

		<div class="col-md-6">

			

				<h4>Agregar persona</h4>

			

			<form action="insertar.php" method="POST" accept-charset="utf-8">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
						    <label>Nombre</label>
						    <input type="text" class="form-control" name="Nombre" placeholder="Nombre">
					    </div>					
					</div>		
					<div class="col-md-6">
						<div class="form-group">
					    	<label>Apellido</label>
					    	<input type="text" class="form-control" name="Apellido" placeholder="Apellido">
					    </div>					
					</div>

					<div class="col-md-6">
						<div class="form-group">
						    <label>Cargo</label>
						    <input type="text" class="form-control" name="Cargo" placeholder="Cargo">
						</div>				
					</div>		
					<div class="col-md-6">
						<div class="form-group">
							<br>
					    	<button type="submit" class="btn btn-primary ">Agregar</button>
					    </div>					
					</div>


				</div>
 
			</form>
			
		</div>

	</div>
	


	
</div>


</body>
</html>