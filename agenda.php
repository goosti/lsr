<?php include_once "partials/header.php"; ?>

<?php
// Tableau des mois en français
$mois = [
    'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin',
    'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'
];

// Récupérer le mois actuel avec date() (0-11)
$moisActuel = date('n') - 1; // 'n' donne un mois entre 1 et 12, donc on soustrait 1
?>

<?php
// Définir le mois et l'année
$mois1 = date('m'); // Mois actuel
$annee = date('Y'); // Année actuelle

// Calculer le premier jour du mois (1er du mois)
$premierJourDuMois = strtotime("$annee-$mois1-01");
$jourDeLaSemaine = date('w', $premierJourDuMois); // Jour de la semaine du 1er (0=dimanche, 6=samedi)

// Calculer le nombre de jours dans le mois
$nombreDeJours = date('t', $premierJourDuMois);

// Centrer le tableau avec CSS
echo "<div style='display: flex; justify-content: center;'>"; // Ajouter un conteneur pour centrer

// Afficher le calendrier
echo "<table border='1' style='border-collapse: collapse; text-align: center; width: 600px; height: 400px;'>";
echo "<tr><th colspan='7' style='font-size: 24px; padding: 15px;'>" . $mois[$moisActuel] . " " . date('Y', $premierJourDuMois) . "</th></tr>"; // Afficher le mois et l'année

// Afficher les jours de la semaine (dimanche à samedi)
echo "<tr>";
echo "<th style='font-size: 18px; padding: 15px;'>Dim</th><th style='font-size: 18px; padding: 15px;'>Lun</th><th style='font-size: 18px; padding: 15px;'>Mar</th><th style='font-size: 18px; padding: 15px;'>Mer</th><th style='font-size: 18px; padding: 15px;'>Jeu</th><th style='font-size: 18px; padding: 15px;'>Ven</th><th style='font-size: 18px; padding: 15px;'>Sam</th>";
echo "</tr>";

// Remplir le calendrier avec des jours
$jourActuel = 1;

// Créer des lignes de 7 jours
for ($i = 0; $i < 6; $i++) { // maximum 6 lignes pour un mois
    echo "<tr>";
    // Remplir les cases vides avant le premier jour du mois
    for ($j = 0; $j < 7; $j++) {
        if (($i == 0 && $j < $jourDeLaSemaine) || $jourActuel > $nombreDeJours) {
            echo "<td style='padding: 20px;'></td>"; // Cases vides
        } else {
            // Créer un lien pour chaque jour
            $url = "jour.php?jour=" . $jourActuel . "&mois=" . $mois[$moisActuel] . "" . "&annee=" . $annee;  // Générer l'URL avec les paramètres
            echo "<td style='padding: 20px; font-size: 20px;'><a href='$url' style='text-decoration: none; color: black;'>" . $jourActuel . "</a></td>";
            $jourActuel++;
        }
    }
    echo "</tr>";
}

echo "</table>";

// Fermer le conteneur de centrage
echo "</div>";
?>

<?php require_once "./partials/footer.php"; ?>
