<?php
    session_start();
	require_once "../bootstrap_doctrine.php";



	$test = new validation;

    $skill = $entityManager->find("competence",$_POST['select_skill']);
    $test->setCompetence($skill);

    $user = $entityManager->find("user",$_SESSION['user_id']);
    $test->setUser($user);
    
//    echo $_POST['statut_comp'];
        if ($_POST['statut_comp'] == 1)
        {
            $acquis = $entityManager->find("statut",1);
            var_dump($acquis);
            $test->setStatut($acquis);
        }
        else
        {
            $encours = $entityManager->find("statut",2);
            var_dump($encours);
            $test->setStatut($encours);
        }



$date = new DateTime();
    $test->setDate($date);

        $erreur = 0;
        $repovalid = $entityManager->getRepository('validation')->findAll();
        foreach ($repovalid as $repovalidele)
        {
            if ($repovalidele->getUser()->getId() == $_SESSION['user_id'] && $repovalidele->getCompetence()->getId() == $_POST['select_skill'] && $repovalidele->getStatut()->getId() == 2 )
            {
                $entityManager->remove($repovalidele);
        		$entityManager->flush();
            }
        }

		$entityManager->persist($test);
		$entityManager->flush();
		echo "Succes de l'insertion";
		$_SESSION['flash'] = "Succes de l'insertion";
header("Location: ../admin.php");
die();
 
?>