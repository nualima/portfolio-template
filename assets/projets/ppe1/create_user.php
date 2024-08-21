<?php

if (isset($_POST['identifiant'], $_POST['password']) && $_POST['identifiant'] !== '' && $_POST['password'] !== '') {
  $bdd = new PDO('mysql:host=localhost:3306;dbname=ppe1_groupe2', 'redwan', 'zjyLzL9JY');
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

  //if($_POST['password'] !== $PO) {
  // TODO Lever une erreur
  //}

  if (isset($_POST['identifiant']) && $_POST['identifiant'] !== '') {
    $q = $bdd->prepare('SELECT COUNT(*) FROM `adherents` WHERE identifiant=:identifiant');
    $q->bindValue('identifiant', $_POST['identifiant']);
    $q->execute();

    //si aucune ligne ne remonte 
    if ($q->fetchColumn() == 0) {
      $requete = $bdd->prepare("INSERT INTO adherents(`id`, `identifiant`, `password`) VALUES('', :identifiant, :pass)");
      $requete->bindParam(':identifiant', $_POST['identifiant'], PDO::PARAM_STR);
      $requete->bindParam(':pass', $_POST['password'], PDO::PARAM_STR);
      $res = $requete->execute();
      $_SESSION['pseudo'] = $_POST['identifiant'];
      header('Location: ./formulaire_renseignement.php');
    } else {
      echo "<div class='alert alert-danger' role='alert'>
        compte déja existant <a href='#' class='alert-link' value='Retour'
        onclick='history.go(-1)' >cliquez ici</a> pour revenir en arrière.
      </div>";
    }

    exit();
  }
}
