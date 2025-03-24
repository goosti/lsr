<?php 
require_once "./partials/header.php";
include_once "./config/database.php";

$fname = '';
$lname = '';
$email = '';
$civilite = '';
$password = '';
$errors = '';


if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $civilite = $_POST['civilite'] ?? '';
    $fname = htmlspecialchars(trim($_POST['firstname'] ?? ''));
    $lname = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $password = htmlspecialchars(trim($_POST['password'] ?? ''));
    
    if (empty($fname) || empty($lname) || empty($email)) {
        $errors['error'] = 'Tous les champs obligatoires doivent être remplis.';
    }
    

    if(empty($password)){
        $errors['password'] = 'Le mot de passe doit contenir au moins 6 caractères';
    } else if(strlen($password) < 6){
        $errors['password'] = 'Le mot de passe doit contenir au moins 6 caractères';
    }

    if(empty($errors)){
        $hash_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO adherant(nom, prenom, email, password, civilite) VALUES (:nom, :prenom, :email, :password, :civilite)";
    
        $stmt = $db->prepare($sql);

        $stmt->bindParam(':nom', $lname, PDO::PARAM_STR);
        $stmt->bindParam(':prenom', $fname, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':password', $hash_password, PDO::PARAM_STR);
        $stmt->bindParam(':civilite', $civilite, PDO::PARAM_STR);

        $stmt->execute();

            header('Location: login.php');
            exit();
    }

    if (empty($errors)) {
        $message = htmlspecialchars(trim($_POST['message'] ?? ''));
        $message = 'Inscription réussie! Vérifiez votre e-mail pour confirmation.';
    }
}


?>





<h2>Inscription</h2>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="Nom" required><br>
        <input type="text" name="firstname" placeholder="Prénom" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Mot de passe" required><br>
        <input type="radio" name="civilite" id="F" value="F"> <label for="F">F</label>
        <input type="radio" name="civilite" id="M" value="M"> <label for="M">M</label><br>
        <button type="submit" class="btn">S'inscrire</button>
    </form>
</div>




<?php require_once "./partials/footer.php" ?>