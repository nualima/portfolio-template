<?php

session_start();

$bdd = new PDO('mysql:host=localhost:3306;dbname=ppe1_groupe2', 'redwan', 'zjyLzL9JY');

$info_complete = true;

if (!$_POST['identite'] || !$_POST['adresse'] || !$_POST['association']) {
    $info_complete = false;
};

if ($info_complete == false) {
    echo '<p style="text:red;">veuillez remplir tout les champs obligatoire * </p>';
    header('Location: /not_de_frais.php?missing_info=true');
    
} else {


    $requete = $bdd->prepare("INSERT INTO demandeurs(id_licence, identite, adresse, association, date_ndf, motif, trajet, kilometre, cout_trajet, peage, repas, hebergement, total, lieu_signature, date_signature)
     VALUES(:id_licence, :identite, :adresse, :association, :date_ndf, :motif, :trajet, :kilometre, :cout_trajet, :peage, :repas, :hebergement, :total, :lieu_signature, :date_signature)");
    $requete->bindParam(':id_licence', $_POST['id_licence'], PDO::PARAM_STR);
    $requete->bindParam(':identite', $_SESSION['identite'], PDO::PARAM_STR);
    $requete->bindParam(':adresse', $_POST['adresse'], PDO::PARAM_STR);
    $requete->bindParam(':association', $_POST['association'], PDO::PARAM_STR);
    $requete->bindParam(':date_ndf', $_POST['date_ndf'], PDO::PARAM_STR);
    $requete->bindParam(':motif', $_POST['motif'], PDO::PARAM_STR);
    $requete->bindParam(':trajet', $_POST['trajet'], PDO::PARAM_STR);
    $requete->bindParam(':kilometre', $_POST['kilometre'], PDO::PARAM_STR);
    $requete->bindParam(':cout_trajet', $_POST['cout_trajet'], PDO::PARAM_STR);
    $requete->bindParam(':peage', $_POST['peage'], PDO::PARAM_STR);
    $requete->bindParam(':repas', $_POST['repas'], PDO::PARAM_STR);
    $requete->bindParam(':hebergement', $_POST['hebergement'], PDO::PARAM_STR);
    $requete->bindParam(':total', $_POST['total'], PDO::PARAM_STR);
    $requete->bindParam(':lieu_signature', $_POST['lieu_signature'], PDO::PARAM_STR);
    $requete->bindParam(':date_signature', $_POST['date_signature'], PDO::PARAM_STR);


    $requete->execute();

    header('Location: /accueil.php?success=true');
};
