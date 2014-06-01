<?php
    session_start();
	// on "lance" doctrine
	require_once "../bootstrap_doctrine.php";
	
	// on indique que l'on a besoin de certaines classes
	require_once "../classes/Admin.php";
	require_once "../classes/Competence.php";
	require_once "../classes/Etudiant.php";
	require_once "../classes/Examinateur.php";
	require_once "../classes/Professeur.php";
	require_once "../classes/Statut.php";
	require_once "../classes/Utilisateur.php";
	require_once "../classes/Validation.php";

	
//	for ($i=0; $i < 50; $i++) {
//		$spe[$i] = rand(1, 2);
//		$etu[$i] = new Etudiant();
//		$etu[$i]->setNom("N".$i);
//		$etu[$i]->setLogin("L".$i);
//		$etu[$i]->setPassword("P".$i);
//		$etu[$i]->setPrenom("Pre".$i);
//		$etu[$i]->setSpecialite($spe[$i]);
//		$etu[$i]->setEmail("email".$i."@etu.org");
//		$entityManager->persist($etu[$i]);
//	}
//	$entityManager->flush();

?>
  <!doctype html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>PPE-14 Ajouter un étudiant</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/main.css">
    <script src="../js/jquery.js"></script>
    <script src="../js/main.js"></script>
  </head>
  <body>
<div class="row">
    <div class="col-md-6 col-md-offset-6">
        <?php
            if (isset($_SESSION['flash'])) {
                echo $_SESSION['flash'];
                unset($_SESSION['flash']);
                
            }
        ?>

      <form class="form-horizontal" id="formulaire_inscription" action="../script/add_etudiant.php" method="post">
<fieldset>


<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="nom">Votre nom de famille</label>
  <div class="controls">
    <input id="nom" name="nom" type="text" placeholder="Saisir ici..." class="input-medium" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="prenom">Votre prenom</label>
  <div class="controls">
    <input id="prenom" name="prenom" type="text" placeholder="Saisir ici..." class="input-medium" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="email">Votre adresse email</label>
  <div class="controls">
    <input id="email" name="email" type="text" placeholder="Saisir ici..." class="input-medium" required="">

  </div>
</div>

<div class="control-group">
  <label class="control-label" for="username">Votre identifiant</label>
  <div class="controls">
    <input id="username" name="username" type="text" placeholder="Saisir ici..." class="input-medium" required="">

  </div>
</div>

<!-- Password input-->
<div class="control-group">
  <label class="control-label" for="password">Votre mot de passe</label>
  <div class="controls">
    <input id="password" name="password" type="password" placeholder="Saisir ici..." class="input-xlarge" required="">
    
  </div>
</div>

<!-- Multiple Radios -->
<div class="control-group">
  <label class="control-label" for="parcours">Votre Parcours</label>
  <div class="controls">
    <label class="radio" for="parcours-0">
      <input type="radio" name="parcours" id="parcours-0" value="SISR" checked="checked" required="required">
      SISR
    </label>
    <label class="radio" for="parcours-1">
      <input type="radio" name="parcours" id="parcours-1" value="SLAM" required="required">
      SLAM
    </label>
  </div>
</div>

<!-- Button (Double) -->
<div class="control-group">
  <label class="control-label" for="btn_valider"></label>
  <div class="controls">
    <button id="btn_valider" name="btn_valider" class="btn btn-success">Valider</button>
  </div>
</div>

</fieldset>
</form>
    <a href="../index.php"><button id="btn_annuler" name="btn_annuler" class="btn btn-danger" style="margin-top:-55px; margin-left:80px;">Retour</button></a>

</div>
</div>
      
<div id="result"></div>
</body>

      </html>
