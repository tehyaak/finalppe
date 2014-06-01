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

	
	for ($i=0; $i < 50; $i++) {
		$skill[$i] = new Competence();
		$skill[$i]->setDescription("C".$i);
		$skill[$i]->setSpecialite(1);
		$skill[$i]->setObligatoire(1);
		$entityManager->persist($skill[$i]);
	}
	$entityManager->flush();

