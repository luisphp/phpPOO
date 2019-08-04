

<?php 
	


	class metodos{

		public function mostrarDatos($sql){

			$c = new conectar();

			$conexion = $c->conexion();

			$result = mysqli_query($conexion,$sql);

			return mysqli_fetch_all($result,MYSQLI_ASSOC);			

		}

		public function insertarDatos($datos){

			$c = new conectar();

			$conexion = $c->conexion();

			$sql = "INSERT INTO `t_persona`(`nombre_persona`, `apellido_apersona`, `cargo`) VALUES ('$datos[0]','$datos[1]','$datos[2]')";

			return $result = mysqli_query($conexion, $sql);


		}

	}


 ?>