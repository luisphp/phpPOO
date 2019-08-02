<?php 

	//self:: y parent::
	
	class clasePadre{

		public function metodoPadre(){

			return "Hola desde el padre";
		}

		public function metodo1(){

			return "Este es el metodo padre";
		}

	}

	class claseHijo extends clasePadre{

		public function metodoHijo(){

			/*return self::metodoPadre(); //Aqui estaria llamando al metodo1() que esta dentro de ClaseHijo

			en cambio si se usa parent::metodoPadre(); //Aqui estaria llamando la metodo1() que esta en la clase padre

			*/
			return parent::metodo1(); 
		}

		public function metodo1(){

			return "Este es el metodo hijo";
		}

	}

	/* 
	La herencia es obtener todas las propiedades de una clase a otra mediante  la palabra reservada extends */

	//$obj = new claseHijo();

	//echo $obj->metodoPadre();

	//Instancia rapida o de doble puntuacion

	echo "<br>". claseHijo::metodoHijo();

 ?>