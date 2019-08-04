<?php 
	
	require_once("conexion.php");
	require_once("metodosCrud.php");
	
	$nombre = $_POST['Nombre'];
	$apellido = $_POST['Apellido'];
	$cargo = $_POST['Cargo'];
	$id_persona = $_POST['id_persona'];

	$datos = array($id_persona,$nombre,$apellido,$cargo);

	$obj = new metodos();

	if($obj->actualizaDatos($datos)  == 1 ){
		header("location:index.php");
	}else{
		echo "Fallo al actualizar";
	}


 ?>