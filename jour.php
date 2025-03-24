<?php require_once "./partials/header.php"; ?>






<?php

$mois_number = $_GET['mois'];

if ($mois_number == "Janvier") {
    $mois_number = "01";
} else if ($mois_number == "Février") {
    $mois_number = "02";
} else if ($mois_number == "Mars") {
    $mois_number = "03";
} else if ($mois_number == "Avril") {
    $mois_number = "04";
} else if ($mois_number == "Mai") {
    $mois_number = "05";
} else if ($mois_number == "Juin") {
    $mois_number = "06";
} else if ($mois_number == "Juillet") {
    $mois_number = "07";
} else if ($mois_number == "Août") {
    $mois_number = "08";
} else if ($mois_number == "Septembre") {
    $mois_number = "09";
} else if ($mois_number == "Octobre") {
    $mois_number = "10";
} else if ($mois_number == "Novembre") {
    $mois_number = "11";
} else if ($mois_number == "Décembre") {
    $mois_number = "12";
}

// Récupérer les paramètres de l'URL
$jour = isset($_GET['jour']) ? (int) $_GET['jour'] : 0; // Assurer que c'est un entier
$mois = isset($_GET['mois']) ? (int) $_GET['mois'] : 0;
$annee = isset($_GET['annee']) ? (int) $_GET['annee'] : 0;

// Vérifier si les paramètres sont valides
if ($jour && $mois_number && $annee) {
    // Par exemple, afficher un message avec la date complète
    $date = "$jour/$mois_number/$annee";
    echo "<h1>Vous avez sélectionné le $date</h1>";

    // Afficher quelque chose de différent selon le jour sélectionné
    if ($jour == 1) {
        echo "<p>C'est le premier jour du mois ! C'est un jour spécial.</p>";
        echo "<p>Soirée bowling en déambulateur</p>";
    } elseif ($jour == 15) {
        echo "<p>Nous sommes à la moitié du mois !</p>";
    } elseif ($jour == 25) {
        echo "<p>C'est presque la fin du mois, tenez bon !</p>";
    }


} else {
    echo "<p>Paramètres de date invalides.</p>";
}
?>












<?php require_once "./partials/footer.php"; ?>