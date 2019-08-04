<?php 
	
	class miclase{

		public $mensaje = "Hola";

		public static function metodo(){

			return $this->mensaje;
		}
	}

	//Deberia mostrar error
	echo miclase::metodo();


 ?>