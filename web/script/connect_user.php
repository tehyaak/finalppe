<?php
session_start();
// Connection au serveur
$dns = 'mysql:host=localhost;dbname=ppe14';
$utilisateur = 'root';
$motDePasse = '';
$connection = new PDO( $dns, $utilisateur, $motDePasse );

$login = 'SELECT login, password FROM etudiant';
$exec_login = $connection->query($login);   
$row = $exec_login->fetch() ;

if ($_POST['user_login'] == $row['login_user'])
{
    if ($_POST['user_pwd'] == $row['pwd_user'])
    {
        $_SESSION['user'] = $_POST['user_login'];
        header("location:index.php");
        die();
    }
    else
    {
        echo "Le mot de passe saisie n'est pas correct.";
    }
}
else
{
    echo 'L\'utilisateur n\'existe pas: $exec_login';
    var_dump($exec_login);
    var_dump($login);
    $row = $exec_login->fetch() ;
}
?>