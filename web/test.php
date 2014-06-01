<?php
	require_once "bootstrap_doctrine.php";
    

    $skills = array(  
    array("Participation à un projet d’évolution d’un SI (solution applicative et d’infrastructure portant prioritairement sur le domaine de spécialité du candidat)",1,0),
    array("Prise en charge d’incidents et de demandes d’assistance liés au domaine de spécialité du candidat",1,0),
    array("Elaboration de documents relatifs à la production et à la fourniture de services",1,0),
    array("Productions relatives à la mise en place d’un dispositif de veille technologique et à l’étude d’une technologie, d’un composant, d’un outil ou d’une méthode",1,0),
    array("A1.1.1 , Analyse du cahier des charges d'un service à produire",0,0),
    array("A1.1.2 , Étude de l'impact de l'intégration d'un service sur le système informatique",0,0),
    array("A1.1.3 , Étude des exigences liées à la qualité attendue d'un service",0,0),
    array("A1.2.1 , Élaboration et présentation d'un dossier de choix de solution technique",0,0),
    array("A1.2.2 , Rédaction des spécifications techniques de la solution retenue",0,0),
    array("A1.2.3 , Évaluation des risques liés à l'utilisation d'un service",0,0),
    array("A1.2.4 , Détermination des tests nécessaires à la validation d'un service",0,0),
    array("A1.2.5 , Définition des niveaux d'habilitation associés à un service",0,0),
    array("A1.3.1 , Test d'intégration et d'acceptation d'un service",0,0),
    array("A1.3.2 , Définition des éléments nécessaires à la continuité d'un service",0,0),
    array("A1.3.3 , Accompagnement de la mise en place d'un nouveau service",0,0),
    array("A1.3.4 , Déploiement d'un service",0,0),
    array("A1.4.1 , Participation à un projet",0,0),
    array("A1.4.2 , Évaluation des indicateurs de suivi d'un projet et justification des écarts",0,0),
    array("A1.4.3 , Gestion des ressources",0,0),
    array("A2.1.1 , Accompagnement des utilisateurs dans la prise en main d'un service",0,0),
    array("A2.1.2 , Évaluation et maintien de la qualité d'un service",0,0),
    array("A2.2.1 , Suivi et résolution d'incidents",0,0),
    array("2.2.2 , Suivi et réponse à des demandes d'assistance",0,0),
    array("A2.2.3 , Réponse à une interruption de service",0,0),
    array("A2.3.1 , Identification, qualification et évaluation d'un problème",0,0),
    array("A2.3.2 , Proposition d'amélioration d'un service",0,0),
    array("A3.1.2 , Maquettage et prototypage d'une solution d'infrastructure",0,2),
    array("A3.1.3 , Prise en compte du niveau de sécurité nécessaire à une infrastructure",0,2),
    array("A3.2.1 , Installation et configuration d'éléments d'infrastructure",0,0),
    array("A3.2.2 , Remplacement ou mise à jour d'éléments défectueux ou obsolètes",0,0),
    array("A3.2.3 , Mise à jour de la documentation technique d'une solution d'infrastructure",0,2),
    array("A3.3.1 , Administration sur site ou à distance des éléments d'un réseau, de serveurs",0,2),
    array("A3.3.2 , Planification des sauvegardes et gestion des restauration",0,2),
    array("A3.3.3 , Gestion des identités et des habilitations",0,2),
    array("A3.3.4 , Automatisation des tâches d'administration",0,2),
    array("A3.3.5 , Gestion des indicateurs et des fichiers d'activité",0,2),
    array("A4.1.1 , Proposition d'une solution applicative",0,1),
    array("A4.1.2 , Conception ou adaptation de l'interface utilisateur d'une solution applicative",0,0),
    array("A4.1.3 , Conception ou adaptation d'une base de données",0,0),
    array("A4.1.4 , Définition des caractéristiques d'une solution applicative",0,1),
    array("A4.1.5 , Prototypage de composants logiciels",0,1),
    array("A4.1.6 , Gestion d'environnements de développement et de test",0,1),
    array("A4.1.7 , Développement, utilisation ou adaptation de composants logiciels",0,0),
    array("A4.1.8 , Réalisation des tests nécessaires à la validation d'éléments adaptés ou développés",0,0),
    array("A4.1.9 , Rédaction d'une documentation technique",0,0),
    array("A4.1.10 ,  Rédaction d'une documentation d'utilisation",0,1),
    array("A4.2.1 , Analyse et correction d'un dysfonctionnement, d'un problème de qualité de …",0,1),
    array("4.2.2 , Adaptation d'une solution applicative aux évolutions de ses composants",0,1),
    array("A4.2.3 , Réalisation des tests nécessaires à la mise en production d'éléments mis à jour",0,1),
    array("A4.2.4 , Mise à jour d'une documentation technique",0,1),
    array("A5.1.1 , Mise en place d'une gestion de configuration",0,0),
    array("A5.1.2 , Recueil d'informations sur une configuration et ses éléments",0,0),
    array("A5.1.3 , Suivi d'une configuration et de ses éléments",0,0),
    array("A5.1.4 , Étude de propositions de contrat de service (client, fournisseur)",0,0),
    array("A5.1.5 , Évaluation d'un élément de configuration ou d'une configuration",0,0),
    array("A5.1.6 , Évaluation d'un investissement informatique",0,0),
    array("A5.2.1 , Exploitation des référentiels, normes et standards adoptés par le prestataire",0,0),
    array("5.2.2 , Veille technologique",0,0),
    array("A5.2.3 , Repérage des compléments de formation ou d'auto-formation ...",0,0),
    array("A5.2.4 , Étude d'une technologie, d'un composant, d'un outil ou d'une méthode",0,0)
);
        
    foreach($skills as $s)
    {
        
	$skill = new competence;
        
    $skill->setIntitule($s[0]);
    $skill->setObligatoire($s[1]);
    $skill->setParcours($s[2]);

    $entityManager->persist($skill);
    $entityManager->flush();
    } 
        
?>