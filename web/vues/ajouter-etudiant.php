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
		$spe[$i] = rand(1, 2);
		$etu[$i] = new Etudiant();
		$etu[$i]->setNom("N".$i);
		$etu[$i]->setLogin("L".$i);
		$etu[$i]->setPassword("P".$i);
		$etu[$i]->setPrenom("Pre".$i);
		$etu[$i]->setSpecialite($spe[$i]);
		$etu[$i]->setEmail("email".$i."@etu.org");
		$entityManager->persist($etu[$i]);
	}
	$entityManager->flush();

