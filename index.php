<?php
require_once "./partials/header.php";
$events = [
    "25-03" => "Marid au cinéma, 4 films. RDV 18h15 dans le hall",
    "03-04" => "Loto à la MPT des Petits Clos",
    "08-04" => "La Cathédrale intégrale 2",
    "12-04" => "Braderie du Secours Populaire Chartrain"
];
?>
    <h2>À venir</h2>
    <div class="events" >
        <?php foreach ($events as $date => $event) { ?>
            <p><strong><?php echo $date; ?> :</strong> <?php echo $event; ?></p>
        <?php } ?>
    </div>

</body>
</html>


<?php require_once "./partials/footer.php";