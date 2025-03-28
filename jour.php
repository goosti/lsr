<?php require_once "./partials/header.php"; ?>






<?php

$mois_number = $_GET['mois'];

// Modifie les mois récupérer dans l'url en entier

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
    echo "<h1>Vous avez sélectionné le $date</h1><br>";
    }

    // Afficher quelque chose de différent selon le jour sélectionné

        if ($jour == 1) {
            echo "<p class='jour'>C'est le premier jour du mois ! C'est un jour spécial.</p>";
            echo "<p class='jour'>Randonnée tranquille dans la nature</p>";
        } elseif ($jour == 2) {
            echo "<p class='jour'>Atelier de peinture</p>";
        } elseif ($jour == 3) {
            echo "<p class='jour'>Lecture au bord de l'Eure</p>";
        } elseif ($jour == 4) {
            echo "<p class='jour'>Jardinage dans le parc</p>";
        } elseif ($jour == 5) {
            echo "<p class='jour'>Visite au musée local</p>";
        } elseif ($jour == 6) {
            echo "<p class='jour'>Après-midi tricot</p>";
        } elseif ($jour == 7) {
            echo "<p class='jour'>Balade en vélo autour de l'Eure</p>";
        } elseif ($jour == 8) {
            echo "<p class='jour'>Visite d'un marché artisanal</p>";
        } elseif ($jour == 9) {
            echo "<p class='jour'>Séance de yoga en plein air</p>";
        } elseif ($jour == 10) {
            echo "<p class='jour'>Soirée barbecue</p>";
        } elseif ($jour == 11) {
            echo "<p class='jour'>Atelier de poterie</p>";
        } elseif ($jour == 12) {
            echo "<p class='jour'>Après-midi jeux de société</p>";
        } elseif ($jour == 13) {
            echo "<p class='jour'>Concert de musique</p>";
        } elseif ($jour == 14) {
            echo "<p class='jour'>Visite d'une exposition d'art</p>";
        } elseif ($jour == 15) {
            echo "<p class='jour'>Nous sommes à la moitié du mois !</p>";
            echo "<p class='jour'>Après-midi bridge</p>";
        } elseif ($jour == 16) {
            echo "<p class='jour'>Balade en forêt en groupe</p>";
        } elseif ($jour == 17) {
            echo "<p class='jour'>Rencontre avec d'autre associations</p>";
        } elseif ($jour == 18) {
            echo "<p class='jour'>Moment de détente avec un bon livre</p>";
        } elseif ($jour == 19) {
            echo "<p class='jour'>Cours de cuisine traditionnelle</p>";
        } elseif ($jour == 20) {
            echo "<p class='jour'>Randonnée en montagne</p>";
        } elseif ($jour == 21) {
            echo "<p class='jour'>Découverte d'un village pittoresque</p>";
        } elseif ($jour == 22) {
            echo "<p class='jour'>Après-midi cinéma</p>";
        } elseif ($jour == 23) {
            echo "<p class='jour'>Atelier de photographie</p>";
        } elseif ($jour == 24) {
            echo "<p class='jour'>Visite d'un jardin botanique</p>";
        } elseif ($jour == 25) {
            echo "<p class='jour'>C'est presque la fin du mois, tenez bon !</p>";
            echo "<p class='jour'>Soirée jeux de société avec la famille</p>";
        } elseif ($jour == 26) {
            echo "<p class='jour'>Promenade en bateau sur la rivière</p>";
        } elseif ($jour == 27) {
            echo "<p class='jour'>Atelier de sculpture</p>";
        } elseif ($jour == 28) {
            echo "<p class='jour'>Rencontre autour d'un café pour discuter</p>";
        } elseif ($jour == 29) {
            echo "<p class='jour'>Visite à la ferme</p>";
        } elseif ($jour == 30) {
            echo "<p class='jour'>Exposition de peinture dans la ville</p>";
        } elseif ($jour == 31) {
            echo "<p class='jour'>Dernier jour du mois ! Profitez de chaque instant.</p>";
            echo "<p class='jour'>Dîner spécial avec des proches</p>";
        } else {
    echo "<p>Paramètres de date invalides.</p>";
        }
?>

<a href="inscription_evenement.php"><button class="inscription">S'inscrire à l'évènement</button></a>












<?php require_once "./partials/footer.php"; ?>