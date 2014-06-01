<?php
    // on "lance" doctrine
    require_once "../bootstrap_doctrine.php";
    
    // on indique que l'on a besoin de certaines classes
	require_once "../classes/Competence.php";
	require_once "../classes/Statut.php";
	require_once "../classes/User.php";
	require_once "../classes/CompetenceRepository.php";
	require_once "../classes/StatutRepository.php";
	require_once "../classes/UserRepository.php";
	require_once "../classes/Validation.php";
    require_once "../classes/ValidationRepository.php";

    session_start();
    
// Connection au serveur
    $use = $entityManager->getRepository('User');
    $user= $use->findOneBy(array('login' => $_POST['user_login']));
    $pass= $use->findOneBy(array('pwd' => $_POST['user_pwd']));

    if ($user != null)
    {
        if ($pass != null)
        {
            $_SESSION['user_id'] = $user->getId();
            header("location:../admin.php");
            die();
        }
        else
        {
            echo "Le mot de passe saisie n'est pas correct.";
        }
    }
    else
    {
        echo "Login invalide.";
    }
?>