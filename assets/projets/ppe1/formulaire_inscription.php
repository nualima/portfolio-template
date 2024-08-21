<?php
include "./header.php"
?>

<script>
    function check_pass() {
        if (document.getElementById('password').value ==
            document.getElementById('confirm_password').value) {
            document.getElementById('submit').disabled = false;
        } else {
            document.getElementById('submit').disabled = true;
        }
    }
</script>
<header> </header>

<div class="form_index">
    <form action='./create_user.php' method='POST'>
        <div class="white">
            <h1 class="h3 mb-3 fw-normal ">connectez-vous</h1>
        </div>

        <div class="form-floating white">
            <label for="floatingInput">nom d'utilisateur :</label>
            <input id="floatingInput" name="identifiant" class="form-control" placeholder="pseudo">

        </div>
        <div class="form-floating white">
            <label for="floatingPassword">Mot de passe :</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="required" onkeyup='check_pass();' />


        </div>


        <div class="form-floating white">
            <label for="floatingPassword">confirmer le mot de passe :</label>
            <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Password" required="required" onkeyup='check_pass();' />
        </div>


        <input type="submit" name="submit" class="w-100 btn btn-lg btn-primary" value="Se connecter" id="submit" required="required" disabled />

    </form>
</div>