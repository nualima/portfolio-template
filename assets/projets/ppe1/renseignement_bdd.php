<?php

if (isset($_POST['identifiant'], $_POST['password']) && $_POST['identifiant'] !== '' && $_POST['password'] !== '') {
  $bdd = new PDO('mysql:host=localhost:3306;dbname=ppe1_groupe2', 'redwan', 'zjyLzL9JY');
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  
  if (isset($_POST['identifiant']) && $_POST['identifiant'] !== '') {
    $q = $bdd->prepare('SELECT COUNT(*) FROM `adherents` WHERE identifiant=:identifiant');
    $q->bindValue('identifiant', $_POST['identifiant']);
    $q->execute();
    ?>