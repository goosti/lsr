<?php
require_once "./partials/header.php";
$events = [
    "25-03" => "Mardi au cinéma, 4 films. RDV 18h15 dans le hall",
    "03-04" => "Loto à la MPT des Petits Clos",
    "08-04" => "La Cathédrale intégrale 2",
    "12-04" => "Braderie du Secours Populaire Chartrain"
];
?>
    <h2>À venir</h2>
    <div class="events">
    <?php foreach ($events as $date => $event) { ?>
        <p><strong><?php echo $date; ?> :</strong> <?php echo $event; ?></p>
    <?php } ?><br><br>
    <p style="font-style: italic;">Semaine Fédérale Culturelle organisée par la Fédération LSR du 13 au 20 septembre à Neuvy s/ Barangeon (Cher)</p><br>
    
    <p><strong>Bienvenue à l'Association des Retraités Solidaires</strong></p><br>

    <p>Notre association est un lieu d'échange, de convivialité et de soutien pour les retraités. Nous proposons diverses activités sociales et culturelles pour maintenir le lien social et favoriser la participation active des seniors à la vie locale.</p>

    <p>Nos bénévoles sont à votre écoute pour répondre à vos besoins et pour vous accompagner dans vos projets. Que vous soyez seul ou en couple, notre association vous propose un espace où vous pouvez vous sentir chez vous.</p><br>

    <p><strong>Rejoignez-nous!</strong> Nous vous invitons à participer à nos événements et à devenir membre pour profiter pleinement de nos services.</p>

    <p>Pour plus d'informations, contactez-nous au 01 23 45 67 89 ou envoyez un email à association@retraitesolidaires.fr.</p>

</div>
</body>
</html>


<?php require_once "./partials/footer.php";