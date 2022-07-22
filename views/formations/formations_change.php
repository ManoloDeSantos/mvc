<?php
	
?>

<!DOCTYPE html>
<html lsemainesg="fr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titre"]; ?></title>
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<script src="assets/js/bootstrap.min.js" ></script>
	</head>
	
	<body>
		<div class="container">
			
			<h2><?php echo $data["titre"]; ?></h2>
			
			<form id="nouveau" name="nouveau" method="POST" action="index.php?c=formations&a=actualiser" autocomplete="off">
				
				<input type="hidden" id="id" name="id" value="<?php echo $data["id"]; ?>" />
				
				<div class="form-group">
					<label for="formation">formation</label>
					<input type="text" class="form-controle" id="formation" name="formation" value="<?php echo $data["formations"]["formation"]?>" />
				</div>
				
				<div class="form-group">
					<label for="formateur">formateur</label>
					<input type="text" class="form-controle" id="formateur" name="formateur" value="<?php echo $data["formations"]["formateur"]?>" />
				</div>
				
				<div class="form-group">
					<label for="commence">Commence</label>
					<input type="text" class="form-controle" id="commence" name="commence" value="<?php echo $data["formations"]["commence"]?>" />
				</div>
				
				<div class="form-group">
					<label for="semaines">Durée Semaines</label>
					<input type="text" class="form-controle" id="semaines" name="semaines" value="<?php echo $data["formations"]["semaines"]?>" />
				</div>
				
				<div class="form-group">
					<label for="prix">prix</label>
					<input type="text" class="form-controle" id="prix" name="prix" value="<?php echo $data["formations"]["prix"]?>" />
				</div>
				
				<button id="enregistrer" name="enregistrer" type="submit" class="btn btn-primary">Enregistrer</button>
				
			</form>
		</body>
	</html>		