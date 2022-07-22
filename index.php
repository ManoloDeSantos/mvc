<?php
	
	require_once "config/config.php";
	require_once "core/routes.php";
	require_once "config/database.php";
	require_once "controllers/Formations.php";
	
	if(isset($_GET['c'])){
		
		$controleur = chargerControleur($_GET['c']);
		
		if(isset($_GET['a'])){
			if(isset($_GET['id'])){
				chargerAccion($controleur, $_GET['a'], $_GET['id']);
				} else {
				chargerAccion($controleur, $_GET['a']);
			}
			} else {
			chargerAccion($controleur, ACCION_PRINCIPAL);
		}
		
		} else {
		
		$controleur = chargerControleur(CONTROLEUR_PRINCIPAL);
		$accionTmp = ACCION_PRINCIPAL;
		$controleur->$accionTmp();
	}
?>