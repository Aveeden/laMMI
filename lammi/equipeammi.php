<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylee.css">
    <link rel="stylesheet" href="css/polices.css">

    <title>L'équipe</title>
</head>

<body>
    <?php if (isset($_GET['success'])) : ?>
        <div class="alert alert-success" role="alert">
            Message sent successfully!
        </div>
    <?php endif; ?>
    <audio src="sounds/Ambiance.mp3" autoplay loop></audio>
    <a href="menu.html"><img class="logo" src="img/logo-protut.png"></a>
        <h1>Notre équipe</h1>
    
        <div class="titre">
            <p> Julien DOS SANTOS </p>
            <p> Aubin OLIVRIE </p>
            <p> Martin GARCIA </p>
            <p> Adam ZEGHOUD </p>
        </div>
    
        <div class="img4">
            <img src="img/JU.jpg" alt="" class="enligne">
    
    
            <img src="img/AU.jpg" alt="" class="enligne">
    
            <img src="img/MG.jpg" alt="" class="enligne">
            <img src="img/AZ.jpg" alt="" class="enligne">
    
        </div>
    
        <section>
            <div class="J">
                <a href="https://etudiant.u-pem.fr/~jdossa11/cv-numerique/accueil.html" target="blank">
                    <p> Liens vers CV numérique </p>
                </a>
    
            </div>
            <div class="A">
                <a href="https://etudiant.u-pem.fr/~aolivrie/" target="blank">
                    <p> Liens vers CV numérique </p>
                </a>
    
            </div>
            <div class="M">
                <a href="https://etudiant.u-pem.fr/~mgarci13/" target="blank">
                    <p> Liens vers CV numérique </p>
                </a>
    
            </div>
            <div class="AD">
                <a href="" target="blank">
                    <p> Liens vers CV numérique </p>
                </a>
    
        </section>
        <div class="container">
            <h2>Contact</h2>
            <div>
                <form action="controllers/form_contact.php" method="POST">
                    <div>
                        <label for="email">Votre email:</label><br>
                        <input type="email" id="email" name="email" placeholder="xxx@zz.net">
                    </div>
                    <div class="form-group">
                        <label for="first_name">Votre prénom suivi de votre nom:</label><br>
                        <input type="text" name="nom" placeholder="Prenom Nom">
                    </div>

                    <div>
                        <label for="txt">On vous écoute.</label><br>
                        <textarea name="txt" rows="10"></textarea>
                    </div>
                    <hr>

                    <button type="submit">Envoyer</button>
                </form>
            </div>
        </div>
    </section>




</body>

</html>