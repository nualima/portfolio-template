
<?php
include './header.php';


session_start();

if (isset($_SESSION) && !empty($_SESSION)) {
  $identifiant = $_SESSION['identifiant'];
 
  $bdd = new PDO('mysql:host=localhost:3306;dbname=ppe1_groupe2', 'redwan', 'zjyLzL9JY');
  $requete = $bdd->prepare("SELECT * FROM `adherents` WHERE identifiant=:identifiant");
  $requete->bindParam(':identifiant', $identifiant, PDO::PARAM_STR);
  
  $requete->execute();
  $adherent = $requete->fetchObject();


  include './profil.php';
}

?>
