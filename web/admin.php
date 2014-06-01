<?php
	// on "lance" doctrine
session_start();

	require_once "bootstrap_doctrine.php";
	
	// on indique que l'on a besoin de certaines classes
	require_once "classes/Competence.php";
	require_once "classes/Statut.php";
	require_once "classes/User.php";
	require_once "classes/CompetenceRepository.php";
	require_once "classes/StatutRepository.php";
	require_once "classes/UserRepository.php";
	require_once "classes/Validation.php";
    require_once "classes/ValidationRepository.php";
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PPE14</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">

</head>

<body>
<div id="wrapper">
<div class="row">
<div class="col-lg-2 col-md-2 col-sm-2 col-xm-2">
<ul class="nav nav-pills nav-stacked" id="sidebar">
  <li class="active"><a href="admin.php"><span class="glyphicon glyphicon-home"></span> <p>Accueil</p></a></li>
  <li><a href="ajout_competence.php"><span class="glyphicon glyphicon-ok"></span> <p class="">Valider une competence</p></a></li>
  <li><a href="afficher_competence.php"><span class="glyphicon glyphicon-list"></span> <p class="small">Voir mes compétences validées</p></a></li>
  <li><a href="gestion_compte.php"><span class="glyphicon glyphicon-user"></span> <p class="small">Gerer mon compte</p></a></li>
  <li><a href="script/logout.php"><span class="glyphicon glyphicon-off"></span> <p>Se deconnecter</p></a></li>
    
    
</ul>    
</div>
<div class="col-lg-10 col-md-10 col-sm-10 col-xm-10">
<?php

$user = $entityManager->find('user', $_SESSION['user_id']);
echo "<h1>Bienvenue ".$user->getPrenom()." ".$user->getNom()."!</h1>";
?>
  
    <?php
$total = 0;
$valid = $entityManager->getRepository('validation')->findAll();
foreach ($valid as $v){
    if ($v->getUser()->getId() == $_SESSION['user_id'] && $v->getStatut()->getId() != 3){
        $total = $total + 1;
    }
}
            
?>
    
    
    <?php 
	$skill = $entityManager->getRepository('competence')->findAll();
    $user = $entityManager->find('user', $_SESSION['user_id']);

	$skillsaeviter = array();
    $valid = $entityManager->getRepository('validation')->findAll();
    foreach ($valid as $v)
    {
        if ($v->getUser()->getId() == $_SESSION['user_id'])
        {
            array_push($skillsaeviter,$v->getCompetence()->getId());
        }
    }
    foreach ($skill as $s)
    {
        if ($s->getParcours() != $user->getParcours() && $s->getParcours() != 0)
        {
            array_push($skillsaeviter,$s->getId());
        } 
    }




?>
    
<?php

$totalskillsdispos = 60 - count($skillsaeviter);
$tauxacquis = $total / $totalskillsdispos;
$tauxacquis = $tauxacquis * 100;

echo '<h2>Bravo, vous avez validé '. $tauxacquis .'% de compétences possibles!';
if ($tauxacquis < 25)
{ $style = "progress-bar progress-bar-danger"; }
if ($tauxacquis < 50 && $tauxacquis > 25)
{ $style = "progress-bar progress-bar-warning"; }
if ($tauxacquis > 50)
{ $style = "progress-bar progress-bar-success"; }

?>
<div class="progress">
<div class="<?php echo $style;?>" role="progressbar" aria-valuenow="<?php echo $tauxacquis;?>% " aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $tauxacquis;?>%;">
</div>
</div>
    
</div>
</div>
</div>    
    
</body>
</html>

	<!-- File /app/View/Users/admin.ctp -->
        


