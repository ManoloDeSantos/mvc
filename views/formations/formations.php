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
			
			<a href="index.php?c=formations&a=nouveau" class="btn btn-primary">Ajouter</a>
			
			<br />
			<br />
			<div class="table-responsive">
				<table border="1" width="80%" class="table">
					<thead>
						<tr class="table-primary">
							<th>Formation</th>
							<th>Formateur</th>
							<th>Commence</th>
							<th>Durée semaines</th>
							<th>Prix €</th>
							<th>Editar</th>
							<th>Supprimer</th>
						</tr>
					</thead>
					
					<tbody>
						<?php foreach($data["formations"] as $dato) {
							echo "<tr>";
							echo "<td>".$dato["formation"]."</td>";
							echo "<td>".$dato["formateur"]."</td>";
							echo "<td>".$dato["commence"]."</td>";
							echo "<td>".$dato["semaines"]."</td>";
							echo "<td>".$dato["prix"]."</td>";
							echo "<td><a href='index.php?c=formations&a=modifier&id=".$dato["id"]."' class='btn btn-warning'>Modifier</a></td>";
							echo "<td><a href='index.php?c=formations&a=supprimer&id=".$dato["id"]."' class='btn btn-danger'>Supprimer</a></td>";
							echo "</tr>";
						}
						?>
					</tbody>
					
				</table>
			</div>
		</div>
	</body>
</html>