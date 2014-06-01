<?php
	$depotValidation = $entityManager->getRepository('Validation');



	if (isset($_SESSION['user'])) {
		$etu = $_SESSION['user'];
		$etu->setId($_SESSION['user']->recupId());
	}

	$listeValidation = $depotValidation->findByEtudiant($etu);

	echo "<table class='table'>";
	echo "<thead><th>Date</th><th>Commentaire</th><th>Lien</th><th>Description</th><th>Parcours</th></thead>";
	$depotCompetence = $entityManager->getRepository('Competence');

	foreach($listeValidation as $c) {
	    echo "<tr><td>" . $c->getDate()->format('Y-m-d') . "</td><td>" . $c->getCommentaire() . "</td><td>";
	    echo $c->getLien() . "</td>";
	    echo "<td>";
	    foreach ($c->getCompetence() as $comp) {
	    	echo $comp->getDescription() . "</td><td>";
	    	if ($comp->getParcours() == 0) {
	    		echo "SISR";
	    	}
	    	else {
	    		echo "SLAM";
	    	}
	    }       
	    echo "</td></tr>";
	    echo "</table>";
	}
?>



