    
    <?php
    session_start();

    if (isset($_SESSION) && !empty($_SESSION)) {
        $identifiant = $_SESSION['identifiant'];

        $bdd = new PDO('mysql:host=localhost:3306;dbname=ppe1_groupe2', 'redwan', 'zjyLzL9JY');
        $requete = $bdd->prepare("SELECT * FROM `adherents` WHERE identifiant=:identifiant");
        $requete->bindParam(':identifiant', $identifiant, PDO::PARAM_STR);

        $requete->execute();
        $adherent = $requete->fetchObject();
        include 'header.php';
    };
    ?>



    <div class="container emp-profile">   
        <div class="alert-danger">

        <?php
         if (isset($_GET['missing_info'])){ echo "<div> Veuillez remplir tous les champs </div>"; }
         ?>
        </div>
        <form>
            <div class="row">
                <div class="col-md-6 ">
                    <h1 class="h3">Note de frais des bénévoles</h1>

                </div>
                <div class="col-md-4">
                    <div class="profile-head h3">




                    </div>
                </div>
                <div class="col-md-2">
                    <script>

                        function confirmer() {
                            event.preventDefault()
                            var res = confirm("Êtes-vous sûr de vouloir quitter cette page ? \rToutes les données que vous avez inscrit ne seront pas enregistrées?");
                            if (res) {
                                location.href = '/accueil.php';                            }
                        }
                    </script>
                    <input onclick="confirmer(event)" type="submit" class="profile-edit-btn" name="btnAddMore" value="annuler" />
                </div>
            </div>
        </form>
        <form action='./traitement_ndf.php' method="post">

            <div class="row">
                <div class="col-md-8">

                    <div class="row infos">
                        <div class="col-md-3">
                            <label>Je sousigne : *
                            </label>
                        </div>
                        <div class="col-md-6">
                            <input id="floatingInput" name="identite" class="form-control" required="required" value='<?php echo $adherent->nom . " " . $adherent->prenom; ?>'>
                        </div>
                    </div>
                    <div class="row infos">
                        <div class="col-md-3">
                            <label>Demeurant : *
                            </label>
                        </div>
                        <div class="col-md-6">
                            <input id="floatingInput" name="adresse" class="form-control" required="required" value='<?php echo $adherent->adresse; ?>'>
                        </div>
                    </div>
                    <div class="row infos">
                        <div class="col-md-3">
                            <label>N° de licence :
                            </label>
                        </div>
                        <div class="col-md-6">
                            <input id="floatingInput" name="id_licence" class="form-control" required="required" value='<?php echo $adherent->licence; ?>' readonly>
                        </div>
                    </div>
                    <div class="row infos">
                        <div class="col-md-12  ">
                            <label>Certifie renoncer au remboursement des frais ci-dessous et les laisser à l'association :*
                            </label>
                        </div>

                        <div class="col-md-12">
                            <input id="floatingInput" name="association" class="form-control" required="required">
                        </div>
                        <div class="col-md-3">
                            <label>en tant que don.
                            </label>
                        </div>
                    </div>
                    <div class="row infos">
                        <div class="col-md-4">
                            <label>Frais de deplacement :
                            </label>
                        </div>
                        <div class="col-md-8">
                            <p> Tarif kilométrique appliqué pour le remboursement : 0.28 € </p>

                        </div>

                        <div class="col-md-12">

                            <table class="table table-bordered">
                               
                                <tr>
                                    <th scope="row">Date (jj/mm/aaaa)</th>
                                    <td><input type="date" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="date_ndf" /></td>

                                </tr>
                                <tr>
                                    <th scope="row">Motif</th>
                                    <td><input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="motif" /></td>

                                </tr>
                                <tr>
                                    <th scope="row">Trajet</th>
                                    <td><input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="trajet" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">kms</th>
                                    <td><input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="kilometre" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">Coût trajet</th>
                                    <td><input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="cout_trajet" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">Péage</th>
                                    <td><input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="peage" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">Repas</th>
                                    <td><input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="repas" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">Hébergement</th>
                                    <td><input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="hebergement" /></td>
                                </tr>
                                <tr>
                                    <th scope="row">Total</th>
                                    <td><input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="total" /></td>
                                </tr>
                            </table>

                        </div>

                    </div>
                    <div class="input-group mb-3 col-md-8 text-right">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">A</span>
                        </div>
                        <input type="text" name="lieu_signature" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-sm">Le</span>
                        </div>
                        <input type="text" name="date_signature" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                    </div>
                    <div class="input-group mb-3" fxLayout="row">
                        <input class="mt-0" id="apparaitre" type="checkbox" name="signature" [formControl]="form.get('commentairePublic')">
                        <label style="margin: 0 0 0 15px;" for="apparaitre">Je certifie avoire verifier que les informations sont bonnes.</label>
                    </div>
                    <div>

                    </div>
                </div>

                <div id="ndf">
                    <button class="w-100 btn btn-lg btn-primary ndf" type="submit">Valider</button>

                </div>
            </div>
        </form>

    </div>