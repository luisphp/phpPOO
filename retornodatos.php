<?php 

	class retornoDatos{
		//Retorno String
		//Retorno Int
		//Retorno Array
		//Retorno json

		//Metodo
		public function retornaString($edad){

			if($edad >= 18){

				return "Es <strong>mayor</strong> de edad";

			}else{

				return "Es <strong>menor</strong> de edad";
			}

		}	

		public function retornaEntero($valor){


			if($valor > 0){
				return 1;
			}else
			{
				return 0;
			}
		} 

		public function retornaArreglo($ciclos){

		$datos = array();

	 for ($i=0; $i < $ciclos; $i++) { 
	 	$datos[$i] = $i;
	 }

	 return $datos;

		}

		public function retornaJson()
		{
			$arr = array(

			"hdd" => 500,
			"pantalla" => 21,
			"ram" => 8
			);

			return json_encode($arr);
		}



	}

	//Termina mi clase

	//Instanciar o declarar un objeto

	$cadena = new retornoDatos();

	var_dump($cadena->retornaString(20));

	echo "<br>";

	var_dump($cadena->retornaEntero(-10));

	echo "<br>";

	var_dump($cadena->retornaArreglo(20));

	echo "<br>";

	var_dump($cadena->retornaJson());




 ?>