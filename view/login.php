<div class="container">
    <?php $error = isset($_POST["identifiant"]) ? "Identifiants incorrects" : null ?>
    <div class="tile">
        <h3>Se connecter</h3>
        <form action="" method="post">
            <label for="identifiant">Identifiant</label><br>
            <input type="text" id="identifiant" class="input" name="identifier" value="<?= $_POST["identifiant"] ?? null ?>"><br>
            <label for="motpasse">Mot de passe</label><br>
            <input type="password" id="motpasse" class="input" name="password"><br>
            <label for="motpasse" class="form-msg"><?= $error ?></label><br>
            <input class="input input-button" type="submit" id="send" value="Se connecter">
        </form>
    </div>
    <script src="script/login.js"></script>
</div>