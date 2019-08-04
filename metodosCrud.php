

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

		public function actualizaDatos($datos){


			$c = new conectar();

			$conexion = $c->conexion();

			$sql = "UPDATE `t_persona` SET `nombre_persona`='$datos[1]',`apellido_apersona`='$datos[2]',`cargo`='$datos[3]' WHERE `id_persona` = '$datos[0]'";

			return $result = mysqli_query($conexion, $sql);


		}

		public function eliminaDatos($datos){


			$c = new conectar();

			$conexion = $c->conexion();

			$sql = "DELETE FROM `t_persona` WHERE `id_persona` = '$datos[0]'";

			return $result = mysqli_query($conexion, $sql);


		}

	}


 ?>