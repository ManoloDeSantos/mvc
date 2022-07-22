<?php
	
	function chargerControleur($controleur){
		
		$nombreControleur = ucwords($controleur)."Controller";
		$archivoControleur = 'controllers/'.ucwords($controleur).'.php';
		
		if(!is_file($archivoControleur)){
			
			$archivoControleur= 'controllers/'.CONTROLEUR_PRINCIPAL.'.php';
			
		}
		require_once $archivoControleur;
		$controle = new $nombreControleur();
		return $controle;
	}
	
	function chargerAccion($controller, $accion, $id = null){
		
		if(isset($accion) && method_exists($controller, $accion)){
			if($id == null){
				$controller->$accion();
				} else {
				$controller->$accion($id);
			}
			} else {
			$controller->ACCION_PRINCIPAL();
		}	
	}
?>