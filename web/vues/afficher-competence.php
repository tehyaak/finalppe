<?php
	// on "lance" doctrine
	require_once "bootstrap_doctrine.php";
	
	// on indique que l'on a besoin de certaines classes
	require_once "classes/Admin.php";
	require_once "classes/Competence.php";
	require_once "classes/Etudiant.php";
	require_once "classes/Examinateur.php";
	require_once "classes/Professeur.php";
	require_once "classes/Statut.php";
	require_once "classes/Utilisateur.php";
	require_once "classes/Validation.php";

	$depotCompetence = $entityManager->getRepository('Competence');
	$listeCompetence = $depotCompetence->findAll();
	echo "<competences>";
	foreach($listeCompetence as $c) {
		echo "<competence>".
						"<id>" . $c->getId() . "</id>" .
						"<description>" . $c->getDescription() . "</description>" .
						"<option>"; if($c->getParcours() == 1) { echo "SLAM"; } else if($c->getParcours() == 2) { echo "SISR"; } else { echo " "; } echo "</option>" .
						"<obligatoire>"; if($c->getObligatoire() == true) { echo "Oui"; } else { echo "Non"; } echo "</obligatoire>".
			"</competence>";
	}
	echo "</competences>";
?>