<?php
	session_start();
	// on "lance" doctrine
	require_once "../bootstrap_doctrine.php";
	
	// on indique que l'on a besoin de certaines classes
	require_once "../classes/Admin.php";
	require_once "../classes/Competence.php";
	require_once "../classes/Etudiant.php";
	require_once "../classes/Examinateur.php";
	require_once "../classes/Professeur.php";
	require_once "../classes/Statut.php";
	require_once "../classes/Utilisateur.php";
	require_once "../classes/Validation.php";

	$depotCompetence = $entityManager->getRepository('Competence');
	$listeCompetence = $depotCompetence->findByParcours($_SESSION['parcours']); ?>
		<!doctype html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Valider une competence</title>
			  <link rel="stylesheet" href="../css/bootstrap.min.css">
			  <link rel="stylesheet" href="../css/main.css">
		</head>
		<body>
			<form action="valider-comp.php" class="form">
				<div class="form-group">
					<label for="comp">Compétence à valider</label>
					<select name="comp" id="comp">
					<?php foreach ($listeCompetence as $c) {
						echo "<option value\"".$c->getId()."\">".$c->getDescription()."</option>";
					}
					?>
					</select>
				</div>
			</form>
		</body>
		</html>

	