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
  <li><a href="ajout_competence.php"><span class="glyphicon glyphicon-ok"></span> <p class="">Valider une competence</p></a></li>
  <li><a href="afficher_competence.php"><span class="glyphicon glyphicon-list"></span> <p class="small">Voir mes compétences validées</p></a></li>
  <li class="active"><a href="gestion_compte.php"><span class="glyphicon glyphicon-user"></span> <p class="small">Gerer mon compte</p></a></li>
  <li><a href="script/logout.php"><span class="glyphicon glyphicon-off"></span> <p>Se deconnecter</p></a></li>
    
    
</ul> 
</div>
<div class="col-lg-10 col-md-10 col-sm-10 col-xm-10">
<form class="form" method="post" action="script/update_email.php">
  <h3>Mettre à jour votre email</h3>
<?php

$user = $entityManager->find('user', $_SESSION['user_id']);
echo "<p>Votre email actuel est : " .$user->getEmail(). " .</p>";
?>
  <div class="form-group">
    <label for="exampleInputEmail1">Votre nouvelle adresse email</label>
    <input type="email" class="form-control" name ="adresse1" id="nv_email" placeholder="Entrez une nouvelle adresse email">
  </div>   
  <div class="form-group">
    <label for="exampleInputEmail1">Confirmer votre nouvelle adresse</label>
    <input type="email" class="form-control" name="adresse2" id="nv_email" placeholder="Confirmer votre nouvelle adresse">
  </div>
    <div class="form-group">
    <button class="btn btn-success" type="submit">Valider</button>
    </div>
</form>

</div>
</div>
</div>    
    
</body>
</html>

	<!-- File /app/View/Users/admin.ctp -->
        


