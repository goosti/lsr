<?php require_once "./partials/header.php" ?>







<h2 style="font-size:x-large;">Bravo ! Vous êtes inscrit à l'évènement</h2>






<script>
    // Fonction pour générer les confettis
    function generateConfetti() {
        let confettiCount = 100; // Nombre de confettis
        let colors = ["#ff5733", "#33ff57", "#3357ff", "#ff33a6", "#f4c542"];

        for (let i = 0; i < confettiCount; i++) {
            let confetti = document.createElement('div');
            confetti.classList.add('confetti');
            confetti.style.width = Math.random() * 15 + 'px';
            confetti.style.height = Math.random() * 15 + 'px';
            confetti.style.left = Math.random() * 100 + 'vw';
            confetti.style.animationDuration = Math.random() * 3 + 2 + 's'; // Durée de l'animation
            confetti.style.animationDelay = Math.random() * 5 + 's'; // Délai avant le début de la chute
            confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];

            document.body.appendChild(confetti);
        }
    }

    // Appeler la fonction de génération de confettis
    window.onload = function () {
        generateConfetti();
    };
</script>







<?php require_once "./partials/footer.php";