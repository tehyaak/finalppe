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
    <script type="text/javascript" src="js/main.js"></script>

</head>

<body>
<div id="wrapper">
<div class="row">
<div class="col-lg-2 col-md-2 col-sm-2 col-xm-2">
<ul class="nav nav-pills nav-stacked" id="sidebar">
  <li><a href="admin.php"><span class="glyphicon glyphicon-home"></span> <p>Accueil</p></a></li>
  <li><a href="ajout_competence.php"><span class="glyphicon glyphicon-ok"></span> <p class="">Valider une competence</p></a></li>
  <li class="active"><a href="afficher_competence.php"><span class="glyphicon glyphicon-list"></span> <p class="small">Voir mes compétences validées</p></a></li>
  <li><a href="gestion_compte.php"><span class="glyphicon glyphicon-user"></span> <p class="small">Gerer mon compte</p></a></li>
  <li><a href="script/logout.php"><span class="glyphicon glyphicon-off"></span> <p>Se deconnecter</p></a></li>
    
    
</ul> 
</div>
<div class="col-lg-10 col-md-10 col-sm-10 col-xm-10">
<div class="row">
<table class="table table-condensed">
<tr>
<th class="col-lg-7 col-md-7 co:-sm-7 col-xm-7">Intitulé</th>
<th class="col-lg-3 col-md-3 co:-sm-3 col-xm-3">Date</th>
<th class="col-lg-1 col-md-1 co:-sm-1 col-xm-1">Obligatoire</th>
<th class="col-lg-1 col-md-1 co:-sm-1 col-xm-1">Statut</th>
</tr>
<?php
$total = 0;
$valid = $entityManager->getRepository('validation')->findAll();
//var_dump($valid);
foreach ($valid as $v){
//    var_dump($v);
    if ($v->getUser()->getId() == $_SESSION['user_id'] && $v->getStatut()->getId() != 3){
        echo '<tr rel="popover" class="skill" id="id'.$v->getCompetence()->getId().'">';
        echo '<td class="col-lg-10 col-md-10 co:-sm-10 col-xm-10"> '.$v->getCompetence()->getIntitule().'</td>';
        echo '<td class="col-lg-3 col-md-3 col-sm-6 col-xm-3">'.$v->getDate()->format("Y-m-d H:i:s").'</td>';
            if ($v->getCompetence()->getObligatoire() == 'true')
            {
                echo '<td class="col-lg-1 col-md-1 co:-sm-1 col-xm-1">oui</td>';    
            }
            else
            {
                echo '<td class="col-lg-1 col-md-1 co:-sm-1 col-xm-1">non</td>';                    
            }
        echo '<td class="col-lg-1 col-md-1 co:-sm-1 col-xm-1"> '.$v->getStatut()->getDescription().'</td>';
        echo '</tr>';
        $total = $total + 1;
    }
}
            
?>
</table>
    
    
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
if ($total == 1)
{
echo '<p class="text-danger">Vous avez un total de ' .$total. ' compétence sur ' .$totalskillsdispos. ' .</p>';
}
if ($tauxacquis < 0.25 && $total != 1)
{
echo '<p class="text-danger">Vous avez un total de ' .$total. ' compétences sur ' .$totalskillsdispos. ' .</p>';
}
if ($tauxacquis < 0.5 && $tauxacquis > 0.25)
{
echo '<p class="text-warning">Vous avez un total de ' .$total. ' compétences sur ' .$totalskillsdispos. ' .</p>';
}
if ($tauxacquis > 0.5)
{
echo '<p class="text-succes">Vous avez un total de ' .$total. ' compétences sur ' .$totalskillsdispos. ' .</p>';
}    
?>
</div>
</div>
</div>
</div>    
    
</body>
</html>