<?php

session_start();


$bdd = new PDO('mysql:host=localhost:3306;dbname=ppe1_groupe2', 'redwan', 'zjyLzL9JY');

$info_complete = true;

if (!$_POST['nom'] || !$_POST['prenom'] || !$_POST['licence'] || !$_POST['mail'] || !$_POST['adresse'] || !$_POST['ville'] || !$_POST['ligue']) {
    $info_complete = false;
};

if ($info_complete == false) {
    header('Location: /formulaire_renseignement.php?missing_info=true');
} else {

  
    $requete = $bdd->prepare("UPDATE `adherents` SET nom=:nom, prenom=:prenom, birthday=:birthday, mail=:mail, numero=:numero, adresse=:adresse,
                             ville=:ville, licence=:licence, ligue=:ligue, validation=1 WHERE identifiant=:identifiant");
    $requete->bindParam(':identifiant', $_SESSION['identifiant'], PDO::PARAM_STR);
    $requete->bindParam(':nom', $_POST['nom'], PDO::PARAM_STR); 
    $requete->bindParam(':prenom', $_POST['prenom'], PDO::PARAM_STR);
    $requete->bindParam(':birthday', $_POST['birthday'], PDO::PARAM_STR);
    $requete->bindParam(':mail', $_POST['mail'], PDO::PARAM_STR);
    $requete->bindParam(':numero', $_POST['numero'], PDO::PARAM_STR);
    $requete->bindParam(':adresse', $_POST['adresse'], PDO::PARAM_STR);
    $requete->bindParam(':ville', $_POST['ville'], PDO::PARAM_STR); 
    $requete->bindParam(':licence', $_POST['licence'], PDO::PARAM_STR);
    $requete->bindParam(':ligue', $_POST['ligue'], PDO::PARAM_STR);

    $requete->execute();

    header('Location: /accueil.php?success=true');
};
