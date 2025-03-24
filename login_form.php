<?php require_once "./partials/header.php" ?>

<div class="container">
    <h2>Connexion</h2>
    <form action="login_process.php" method="POST">
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Mot de passe" required><br>
        <button type="submit" class="btn">Se connecter</button>
    </form>
</div>









<?php require_once "./partials/footer.php" ?>