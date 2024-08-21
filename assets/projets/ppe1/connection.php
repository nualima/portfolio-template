<?php

session_start();


if (isset($_POST['identifiant'], $_POST['password'])) {

    $bdd = new PDO('mysql:host=localhost:3306;dbname=ppe1_groupe2', 'redwan', 'zjyLzL9JY');
    $requete = $bdd->prepare("SELECT * FROM `adherents` WHERE identifiant=:identifiant AND password=:password ");
    $requete->bindParam(':identifiant', $_POST['identifiant'], PDO::PARAM_STR);
    $requete->bindParam(':password', $_POST['password'], PDO::PARAM_STR);

    $requete->execute();
    $result = $requete->fetchObject();
    $_SESSION['identifiant'] = $_POST['identifiant'];
    $_SESSION['password'] = $_POST['password'];
    if ($result) { 
        if ($result->validation == 1){

        header('Location: /accueil.php');


        } 
        if ($result->validation == 0){
            header('Location: /formulaire_renseignement.php');
        }
    } else {
    include "error_page.php";
    }

}
