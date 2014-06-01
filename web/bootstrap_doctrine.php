<?php
// bootstrap.php
require_once "vendor/autoload.php";
	require_once "classes/Competence.php";
	require_once "classes/Statut.php";
	require_once "classes/User.php";
	require_once "classes/CompetenceRepository.php";
	require_once "classes/StatutRepository.php";
	require_once "classes/UserRepository.php";
	require_once "classes/Validation.php";
    require_once "classes/ValidationRepository.php";
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;


// Préparation de la prise en compte des annotations (directives dans les commentaires)
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/classes"), $isDevMode);

// Paramètres de connexion
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'symfony',
);

$entityManager = EntityManager::create($dbParams, $config);