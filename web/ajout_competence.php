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
  <li><a href="admin.php"><span class="glyphicon glyphicon-home"></span> <p>Accueil</p></a></li>
  <li class="active"><a href="ajout_competence.php"><span class="glyphicon glyphicon-ok"></span> <p class="">Valider une competence</p></a></li>
  <li><a href="afficher_competence.php"><span class="glyphicon glyphicon-list"></span> <p class="small">Voir mes compétences validées</p></a></li>
  <li><a href="gestion_compte.php"><span class="glyphicon glyphicon-user"></span> <p class="small">Gerer mon compte</p></a></li>
  <li><a href="script/logout.php"><span class="glyphicon glyphicon-off"></span> <p>Se deconnecter</p></a></li>
    
    
</ul>     
</div>
<div class="col-lg-10 col-md-10 col-sm-10 col-xm-10">
<?php 
	$skill = $entityManager->getRepository('competence')->findAll();
    $user = $entityManager->find('user', $_SESSION['user_id']);

	$skillsaeviter = array();
    $valid = $entityManager->getRepository('validation')->findAll();
    foreach ($valid as $v)
    {
        if ($v->getUser()->getId() == $_SESSION['user_id'] && $v->getStatut()->getId() !=2 )
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
<form action="script/add_skill.php" method="post" class="form">
<div class="row">
<select class="form-control" id="sel_skill" name="select_skill" >
   
    <?php
foreach ($skill as $s){
var_dump(array_search($s->getId(), $skillsaeviter));
    
    if (in_array($s->getId(), $skillsaeviter)){
    }
    else 
{
    	echo '<option value="'.$s->getId().'"> '.$s->getIntitule().'</option>';    
}

}

    ?>
    

    
</select>
</div>
<div class="row">
<div class="col-lg-6 col-md-6 col-xm-6 col-sm-6">
<label class="checkbox-inline">
  <input type="radio" id="statut" name="statut_comp" value="1" checked="checked"> <p class="text-success">Acquis</p>
</label>
</div>
<div class="col-lg-6 col-md-6 col-xm-6 col-sm-6">
<label class="checkbox-inline">
  <input type="radio" id="statut" name="statut_comp" value="2"> <p class="text-warning">En cours d'acquisition</p>
</label>
</div>    
</div>
<button class="btn btn-success" type="submit">Valider</button>
</form>
</div>
</div>
</div>    
    
</body>
</html>

	<!-- File /app/View/Users/admin.ctp -->
        


