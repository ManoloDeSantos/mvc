<?php
	
	class Formations_model {
		
		private $db;
		private $formations;
		
		public function __construct(){
			$this->db = Connecter::conexion();
			$this->formations = array();
		}
		
		public function get_formations()
		{
			$sql = "SELECT * FROM formations";
			$resultat = $this->db->query($sql);
			while($row = $resultat->fetch_assoc())
			{
				$this->formations[] = $row;
			}
			return $this->formations;
		}
		
		public function inserer($formation, $formateur, $commence, $semaines, $prix){
			
			$resultat = $this->db->query("INSERT INTO formations (formation, formateur, commence, semaines, prix) VALUES ('$formation', '$formateur', '$commence', '$semaines', '$prix')");
			
		}
		
		public function modifier($id, $formation, $formateur, $commence, $semaines, $prix){
			
			$resultat = $this->db->query("UPDATE formations SET formation='$formation', formateur='$formateur', commence='$commence', semaines='$semaines', prix='$prix' WHERE id = '$id'");			
		}
		
		public function supprimer($id){
			
			$resultat = $this->db->query("DELETE FROM formations WHERE id = '$id'");
			
		}
		
		public function get_vehiculo($id)
		{
			$sql = "SELECT * FROM formations WHERE id='$id' LIMIT 1";
			$resultat = $this->db->query($sql);
			$row = $resultat->fetch_assoc();

			return $row;
		}
	} 
?>