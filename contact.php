<?php require_once "./partials/header.php"; ?>





<?php
// Initialisation des variables
$nom = $email = $sujet = $message = "";
$success = $error = "";

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars(trim($_POST["nom"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $sujet = htmlspecialchars(trim($_POST["sujet"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // Vérification des champs
    if (empty($nom) || empty($email) || empty($sujet) || empty($message)) {
        $error = "Tous les champs sont requis.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Email invalide.";
    } else {
        // Simuler l'envoi (remplace par mail() si besoin)
        $success = "Votre message a bien été envoyé !";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .container-1 { max-width: 500px; margin: auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
        .error { color: red; }
        .success { color: green; }

    </style>
</head>


<div class="container-1">
    <h2>Contactez-nous</h2>

    <?php if ($error): ?>
        <p class="error"><?php echo $error; ?></p>
    <?php endif; ?>

    <?php if ($success): ?>
        <p class="success"><?php echo $success; ?></p>
    <?php endif; ?>

    <form action="" method="post">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" value="<?php echo $nom; ?>" required><br><br>

        <label for="email">Email :</label>
        <input type="email" name="email" id="email" value="<?php echo $email; ?>" required><br><br>

        <label for="sujet">Sujet :</label>
        <input type="text" name="sujet" id="sujet" value="<?php echo $sujet; ?>" required><br><br>

        <label for="message">Message :</label>
        <textarea name="message" id="message" required><?php echo $message; ?></textarea><br><br>

        <button type="submit">Envoyer</button>
    </form>
</div>

</body>
</html>










<?php require_once "./partials/header.php";