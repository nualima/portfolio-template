<?php
session_start();

if (isset($_SESSION) && !empty($_SESSION)) {
    $identifiant = $_SESSION['identifiant'];

    $bdd = new PDO('mysql:host=localhost:3306;dbname=ppe1_groupe2', 'redwan', 'zjyLzL9JY');
    $requete = $bdd->prepare("SELECT * FROM `adherents` WHERE identifiant=:identifiant");
    $requete->bindParam(':identifiant', $identifiant, PDO::PARAM_STR);

    $requete->execute();
    $adherent = $requete->fetchObject();
    include './header.php';
}
?>





<div class="container emp-profile">
    <form action="./accueil.php" method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="profil_vide.jpg" alt="" />

                    <div class="file btn btn-lg btn-primary">
                        Change Photo
                        <input type="file" name="file" />
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                    <?php
                    echo '<h5> Bonjour ' . $adherent->prenom . ' ! </h5>';

                    ?>

                </div>
            </div>
            <div class="col-md-2">
                <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Retour" />
            </div>
        </div>
    </form>
    <form action="traitement_formulaire.php" method="post">
        <div class="row">
            <div class="col-md-4">


            </div>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">

                    <div class="row infos">
                        <div class="col-md-2">
                            <label>Nom :
                            </label>
                        </div>
                        <div class="col-md-6">
                            <input id="floatingInput" name="nom" class="form-control" required="required" value=<?php echo "'" . $adherent->nom . "'"; ?>>

                        </div>
                    </div>

                    <div class="row infos">
                        <div class="col-md-2">
                            <label>Prenom :</label>
                        </div>
                        <div class="col-md-6">
                            <input id="floatingInput" name="prenom" class="form-control" value=<?php echo "'" . $adherent->prenom . "'"; ?>>
                        </div>
                    </div>
                    <div class="row infos">
                        <div class="col-md-2">
                            <label>Birthday :</label>
                        </div>
                        <div class="col-md-6">
                            <input id="floatingInput" type="date" name="birthday" class="form-control" value=<?php echo "'" . $adherent->birthday . "'"; ?>>
                        </div>
                    </div>
                    <div class="row infos">
                        <div class="col-md-2">
                            <label>Email</label>
                        </div>
                        <div class="col-md-6">
                            <input id="floatingInput" name="mail" class="form-control" value=<?php echo "'" . $adherent->mail . "'"; ?>>
                        </div>
                    </div>
                    <div class="row infos">
                        <div class="col-md-2">
                            <label>numero</label>
                        </div>
                        <div class="col-md-6">
                            <input id="floatingInput" name="numero" class="form-control" value=<?php echo "'" . $adherent->numero . "'"; ?>>
                        </div>
                    </div>
                    <div class="row infos">
                        <div class="col-md-2">
                            <label>adresse :</label>
                        </div>
                        <div class="col-md-6">
                            <input id="floatingInput" name="adresse" class="form-control" value=<?php echo "'" . $adherent->adresse . "'"; ?>>
                        </div>
                    </div>
                    <div class="row infos">
                        <div class="col-md-2">
                            <label>ville :</label>
                        </div>
                        <div class="col-md-6">
                            <input id="floatingInput" name="ville" class="form-control" value=<?php echo "'" . $adherent->ville . "'"; ?>>
                        </div>
                    </div>
                    <div class="row infos">
                        <div class="col-md-2">
                            <label>Licence :</label>
                        </div>
                        <div class="col-md-6">
                            <input id="floatingInput" name="licence" class="form-control" value=<?php echo "'" . $adherent->licence . "'"; ?>>
                        </div>
                    </div>
                    <div class="row infos">
                        <div class="col-md-2">
                            <label>Ligue :</label>
                        </div>
                        <div class="col-md-6">
                            <input id="floatingInput" name="ligue" class="form-control" value=<?php echo "'" . $adherent->ligue . "'"; ?>>
                        </div>
                    </div>




                </div>
            </div>
        </div>
        <button class="w-25 btn btn-lg btn-primary edit_btn  " type="submit">Enregistrer les modifications </button>

    </form>
    <?php
    echo '<a href="./deconnection.php" target="_self"> <input type="button" value="Deconnection"> </a>';

    ?>
</div>