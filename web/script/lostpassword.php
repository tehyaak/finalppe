<?php
	require_once "../bootstrap_doctrine.php";
	require_once "../classes/Competence.php";
	require_once "../classes/Statut.php";
	require_once "../classes/User.php";
	require_once "../classes/CompetenceRepository.php";
	require_once "../classes/StatutRepository.php";
	require_once "../classes/UserRepository.php";
	require_once "../classes/Validation.php";
    require_once "../classes/ValidationRepository.php";
    session_start();


    $test = $entityManager->getRepository('user')->findBy(array('login' => $_POST['user_login']));
    var_dump($test);
    $test2 = $test->getEmail();
    if ($test2 == $_POST['user_email'])
    {
        // To
$to = $test->getEmail();
 
// Subject
$subject = 'Mot de passe oublié';
 
// Message
$msg = 'Votre mot de passe oublié est: '. $test->getPwd().'.';
 
// Function mail()
mail($to, $subject, $msg);
    
    }
    else
    {
    echo 'echec!';
    header("Refresh: 5; Location: ../index.php");
die();
    }


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