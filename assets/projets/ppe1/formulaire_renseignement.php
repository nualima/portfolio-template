<?php 
    include './header.php';

    

?>


<div class="container emp-profile">

    <div class="alert-danger">
        <?php
if (isset($_GET['missing_info'])){ echo "<div> Veuillez remplir tous les champs </div>"; }
?>
    </div>

    
    <form action="./traitement_formulaire.php" method="post">

        <div class="row">
            
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row infos">
                            <div class="col-md-2">
                                <label>Nom :
                            </label>
                            </div>
                            <div class="col-md-6">
                            <input id="floatingInput" name="nom" class="form-control" required="required" placeholder="Ex: Gharbi">
                            </div>                           
                        </div>
                        <div class="row infos">
                            <div class="col-md-2">
                                <label>Prenom :</label>
                            </div>
                            <div class="col-md-6">
                            <input id="floatingInput" name="prenom" class="form-control" placeholder="Ex: Redwan">                           
                            </div>
                        </div>
                        <div class="row infos">
                            <div class="col-md-2">
                                <label>Birthday :</label>
                            </div>
                            <div class="col-md-6">
                            <input id="floatingInput" type="date" name="birthday" class="form-control" placeholder="">                           
                            </div>
                        </div>
                        <div class="row infos">
                            <div class="col-md-2">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                            <input id="floatingInput" name="mail" class="form-control" placeholder="Ex: redwan@hotmail.com">                           
                            </div>
                        </div>
                        <div class="row infos">
                            <div class="col-md-2">
                                <label>numero</label>
                            </div>
                            <div class="col-md-6">
                            <input id="floatingInput" name="numero" class="form-control" placeholder="Ex: 0768716784">                           
                            </div>
                        </div>
                        <div class="row infos">
                            <div class="col-md-2">
                                <label>adresse :</label>
                            </div>
                            <div class="col-md-6">
                            <input id="floatingInput" name="adresse" class="form-control" placeholder="1571 chemin de St claude">                           
                            </div>
                        </div> 
                        <div class="row infos">
                            <div class="col-md-2">
                                <label>ville :</label>
                            </div>
                            <div class="col-md-6">
                            <input id="floatingInput" name="ville" class="form-control" placeholder="Antibes">                           
                            </div>
                        </div>
                        <div class="row infos">
                            <div class="col-md-2">
                                <label>Licence :</label>
                            </div>
                            <div class="col-md-6">
                            <input id="floatingInput" name="licence" class="form-control" placeholder="123">                           
                            </div>
                        </div>
                        <div class="row infos">
                            <div class="col-md-2">
                                <label>Ligue :</label>  
                            </div>
                            <div class="col-md-6">
                            <input id="floatingInput" name="ligue" class="form-control" placeholder="123">                           
                            </div>
                        </div>

                    
                    </div>
                    <button class="w-25 btn btn-lg btn-primary" type="submit">se connecter </button>

                </div>
            </div>
        </div>
    </form>
    <?php
    echo '<a href="./deconnection.php" target="_self"> <input type="button" value="Deconnection"> </a>';

    ?>
    
</div>