<?php
	
	class Connecter {
		
		public static function conexion(){
			
			$conexion = new mysqli("localhost", "root", "", "mvc");
			return $conexion;
			
		}
	}
?>