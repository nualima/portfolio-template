
<form action='./create_user.php' method='POST'>

    <div class="form-floating">
        <input type="" name="identifiant" class="form-control" id="floatingInput" placeholder="pseudo">
        <label for="floatingInput">nom d'utilisateur</label>
    </div>
    <div class="form-floating">
        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Mot de passe</label>
    </div>
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" value="remember-me"> Se rappeler de moi
        </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">s'inscrire</button>
</form>
<?php
include "./post_formulaire.php";
?>
