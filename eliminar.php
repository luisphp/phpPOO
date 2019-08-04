<?php 
	

	require_once("conexion.php");
	require_once("metodosCrud.php");
	
	$id_persona = $_GET['id'];

	$datos = array($id_persona);

	$obj = new metodos();

	if($obj->eliminaDatos($datos)  == 1 ){
		header("location:index.php");
	}else{
		echo "Fallo al eliminar";
	}




 ?>