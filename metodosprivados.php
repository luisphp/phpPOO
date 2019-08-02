<?php


//Metodo privado

/*
	un metodo privado solo puede ser accedido en la misma clase donde fue privado, al mismo tiempo no puede mostrarse fuera o en instancia, debe manejarse dentro de un metodo de la misma clase
*/ 
class clase1{
	private function saludar(){

		return "Hola desde metodo privado";
	}	

	public function mandaSaludo(){
		self::saludar();
	}

}

	/*Si esta funcionando bien esto debe mostrar un error ya que el metodo que estamos instanciando es privado  */
	echo clase1::mandarSaludo();



 ?>