<?php
	require_once "../bootstrap_doctrine.php";
    session_start();


	$test = $entityManager->find('user',$_SESSION['user_id']);
    $currentmail = $test->getEmail();


	if ($_POST['adresse1'] == $_POST['adresse2'] && $_POST['adresse1'] != $currentmail)
    {
	$test->setEmail($_POST['adresse1']);
	
    
  

	
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