<?php 
	
	require_once("conexion.php");
	require_once("metodosCrud.php");
	
	$nombre = $_POST['Nombre'];
	$apellido = $_POST['Apellido'];
	$cargo = $_POST['Cargo'];

	$datos = array($nombre,$apellido,$cargo);

	$obj = new metodos();

	if($obj->insertarDatos($datos)  == 1 ){
		header("location:index.php");
	}else{
		echo "Fallo al agregar";
	}


 ?>