<?php 

/*
Los metodos protegidos solo pueden ser accedidos desde herencia de clase o solo desde clases hijas
*/

	class clasePadre{

		protected function metodo1(){

			return "Metodo protegido de la clase padre";
		}

	}

	class claseHija extends clasePadre{

		public function muestra(){

			return parent::metodo1();
		}


	}

	$obj = new claseHija();

	echo $obj->muestra();



 ?>