<?php
	require_once "../bootstrap_doctrine.php";

	$test = new User;

	$test->setNom($_POST['user_nom']);
	$test->setPrenom($_POST['user_prenom']);
	$test->setEmail($_POST['user_email']);
	$test->setLogin($_POST['user_login']);
	$test->setPwd($_POST['user_pwd']);
    
    if ($_POST['user_specialite'] == "SISR")
    {
        $test->setParcours(1);
    }
    else{
        $test->setParcours(2);
    }

	$etu = $entityManager->getRepository('user');
	$etudiant= $etu->findOneBy(array('login' => $test->getLogin()));
	if ($etudiant == null) {
		$entityManager->persist($test);
		$entityManager->flush();
		echo "Succes de l'insertion";
		$_SESSION['flash'] = "Succes de l'insertion";
header("Location: ../admin.php");
die();
    }
	else {
		echo "Echec de l'insertion";
		$_SESSION['flash'] = "Echec de l'insertion";
header("Refresh: 5; Location: ../index.php");
die();	}


?>