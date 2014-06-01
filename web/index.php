  <?php
  session_start();
  // on "lance" doctrine
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
    <title>PPE-14 Login</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
      
  </head>
  <body>
      <div id="wrapper">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
            <h1>Bienvenue</h1>
            <p>Connectez vous pour pouvoir accèder à votre portefeuille. Sinon, créez un compte pour commencer!</p>
        </div>
      </div>
      
          
      <div class="row">
        <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6">
            <button type="button" class="btn btn-default btn-lg btn-block" data-toggle="modal" data-target="#modal_login">Connexion</button>  
        </div>
        <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6">
            <button type="button" class="btn btn-default btn-lg btn-block" data-toggle="modal" data-target="#modal_register">Inscription</button>  
        </div>
      </div>

        </div>
<!--
DEBUT MODAL CONNEXION          
-->
<div class="modal fade" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Connexion</h4>
      </div>
      <div class="modal-body">
          <form action="script/connect.php" method="post" class="form">  
              <div class="form-group">
                <label for="exampleInputEmail1">Login</label>
                <input type="text" class="form-control" id="username" name="user_login" placeholder="Nom d'utilisateur" required autofocus>
            </div>
              
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe</label>
    <input type="password" class="form-control" id="password" name="user_pwd" placeholder="Mot de passe" required>
  </div>
    <a href="#" data-toggle="modal" data-target="#modal_lostpwd">Mot de passe oublié?</a>
      </div>
          
          <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
        <button class="btn btn-success" type="submit">Connexion</button>
            </div>
        </form>
          
    </div>
  </div>
</div>
         </div>
<!--
FIN MODAL CONNEXION      
-->
      
      
<!--
DEBUT MODAL INSCRIPTION          
-->
<div class="modal fade" id="modal_register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Inscription</h4>
      </div>
      <div class="modal-body">
          <form action="script/add_etudiant.php" method="post" class="form">  
              <div class="form-group">
                <label for="exampleInputEmail1">Nom</label>
                <input type="text" class="form-control" id="usernom" name="user_nom" placeholder="Votre nom de famille" required>
            </div>
              
            <div class="form-group">
                <label for="exampleInputEmail1">Prenom</label>
                <input type="text" class="form-control" id="userprenom" name="user_prenom" placeholder="Votre prenom" required>
            </div>
              
              <div class="form-group">
                <label for="exampleInputEmail1">Login</label>
                <input type="text" class="form-control" id="username" name="user_login" placeholder="Nom d'utilisateur" required>
            </div>
              
  <div class="form-group">
    <label for="exampleInputPassword1">Mot de passe</label>
    <input type="password" class="form-control" id="password" name="user_pwd" placeholder="Mot de passe" required>
  </div>  
              
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" id="useremail" name="user_email" placeholder="Votre email" required>
  </div>
              
  <div class="form-group">
      <div class="radio">
  <label>
    <input type="radio" name="user_specialite" id="userspecialiteSISR" value="SISR" checked>
    SISR
  </label>
</div>
<div class="radio">
  <label>
    <input type="radio" name="user_specialite" id="userspecialiteSLAM" value="SLAM">
      SLAM
    </label>
</div>
  </div>              
    <p class="text-warning">Votre email sera utilisé en cas de perte de vos identifiants.</p>          
      </div>
          
          <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
        <button class="btn btn-success" type="submit">Inscription</button>
            </div>
        </form>
          
    </div>
  </div>
</div>
         </div>
<!--
FIN MODAL INSCRIPTION      
-->  
      
<!--
DEBUT MODAL MOT DE PASSE PERDU          
-->
<div class="modal fade" id="modal_lostpwd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Mot de passe oublié?</h4>
      </div>
      <div class="modal-body">
          <form action="script/lostpassword.php" method="post" class="form">  
              <div class="form-group">
                <label for="exampleInputEmail1">Login</label>
                <input type="text" class="form-control" id="username" name="user_login" placeholder="Votre nom d'utilisateur" required autofocus>
            </div>
              
  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" id="password" name="user_pwd" placeholder="Votre adresse email" required>
  </div>
      </div>
          
          <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
        <button class="btn btn-success" type="submit">Renvoyer le mot de passe</button>
            </div>
        </form>
          
    </div>
  </div>
</div>
         </div>
<!--
FIN MODAL MOT DE PASSE PERDU      
-->

      </div>
      
      
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>
  <div class="content">
