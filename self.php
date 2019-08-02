<?php 
	class Metodos{
		public function mandarColor($valor){
			if($valor == 1){

				return "Red";

			}else if($valor == 2){

				return "Blue";
			}else if($valor == 3){

				return "Yellow";
			}

		}

		public function darDeAltaColor($tipocolor){

			/*
			$obj = new Metodos();
			return $obj->mandarColor($tipocolor);

			Se sustituye esto por self::
			*/

			return self::mandarColor($tipocolor);
		}

		


	}

	$obj = new Metodos();
		echo $obj->darDeAltaColor(1);

 ?>