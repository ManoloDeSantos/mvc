<?php
	
	class FormationsController {
		
		public function __construct(){
			require_once "models/FormationsModel.php";
		}
		
		public function index(){
			
			
			$formations = new Formations_model();
			$data["titre"] = "Formations";
			$data["formations"] = $formations->get_formations();
			
			require_once "views/formations/formations.php";	
		}
		
		public function nouveau(){
			
			$data["titre"] = "Formations";
			require_once "views/formations/formations_nouveau.php";
		}
		
		public function enregistrer(){
			
			$formation = $_POST['formation'];
			$formateur = $_POST['formateur'];
			$commence = $_POST['commence'];
			$semaines = $_POST['semaines'];
			$prix = $_POST['prix'];
			
			$formations = new Formations_model();
			$formations->inserer($formation, $formateur, $commence, $semaines, $prix);
			$data["titre"] = "Formations";
			$this->index();
		}
		
		public function modifier($id){
			
			$formations = new Formations_model();
			
			$data["id"] = $id;
			$data["formations"] = $formations->get_vehiculo($id);
			$data["titre"] = "Formations";
			require_once "views/formations/formations_change.php";
		}
		
		public function actualiser(){

			$id = $_POST['id'];
			$formation = $_POST['formation'];
			$formateur = $_POST['formateur'];
			$commence = $_POST['commence'];
			$semaines = $_POST['semaines'];
			$prix = $_POST['prix'];

			$formations = new Formations_model();
			$formations->modifier($id, $formation, $formateur, $commence, $semaines, $prix);
			$data["titre"] = "Formations";
			$this->index();
		}
		
		public function supprimer($id){
			
			$formations = new Formations_model();
			$formations->supprimer($id);
			$data["titre"] = "Formations";
			$this->index();
		}	
	}
?>