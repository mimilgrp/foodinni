<div class="tile-area">
    <div class="tile">
        <h4>Log in</h4>
        <form action="" method="post">
            <label for="identifier">Identifier</label><br>
            <input type="text" id="identifier" name="identifier" value="<?= $_POST["identifiant"] ?? null ?>"><br>
            <label for="password">Password</label><br>
            <input type="password" id="password" name="password"><br>
            <label for="password"><?= isset($_POST["identifiant"]) ? "Bad credentials, please try again" : null ?></label><br>
            <input type="submit" value="Sign in">
        </form>
    </div>
</div>