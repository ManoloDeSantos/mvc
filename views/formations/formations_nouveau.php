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
			
			<form id="nouveau" name="nouveau" method="POST" action="index.php?c=formations&a=enregistrer" autocomplete="off">
				<div class="form-group">
					<label for="formation">formation</label>
					<input type="text" class="form-controle" id="formation" name="formation" />
				</div>
				
				<div class="form-group">
					<label for="formateur">Formateur</label>
					<input type="text" class="form-controle" id="formateur" name="formateur" />
				</div>
				
				<div class="form-group">
					<label for="commence">Commence</label>
					<input type="text" class="form-controle" id="commence" name="commence" />
				</div>
				
				<div class="form-group">
					<label for="semaines">Durée Semaines</label>
					<input type="text" class="form-controle" id="semaines" name="semaines" />
				</div>
				
				<div class="form-group">
					<label for="prix">prix</label>
					<input type="text" class="form-controle" id="prix" name="prix" />
				</div>
				
				<button id="enregistrer" name="enregistrer" type="submit" class="btn btn-primary">Enregistrer</button>
				
			</form>
		</div>
	</body>
</html>