<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acceuil</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://fonts.googleapis.com/css?family=Sen&display=swap" rel="stylesheet">
</head>

<body>

<?php if (isset($_GET['success'])): ?>
    <div class="alert alert-success" role="alert">
        Message sent successfully!
    </div>
    <?php endif; ?>


    <h1>L'AMMI</h1>

    <nav>

        <span>Diplômes</span>
        <span>Domaine d'études</span>
        <span>Lieux d'études</span>
        <span>La MMI</span>

    </nav>
    <br>
    <section class="p1">
        <header>Section 1</header>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum labore ea voluptatum tempore quam libero quis
            quidem? Ipsam odio voluptatum aliquid nesciunt. Sint recusandae aut officia delectus minima! Enim,
            cupiditate!</p>
    </section>

    <section class="p1">
        <header>Section 2</header>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum labore ea voluptatum tempore quam libero quis
            quidem? Ipsam odio voluptatum aliquid nesciunt. Sint recusandae aut officia delectus minima! Enim,
            cupiditate!</p>
    </section>

    <section class="p1">
        <header>Section 3</header>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum labore ea voluptatum tempore quam libero quis
            quidem? Ipsam odio voluptatum aliquid nesciunt. Sint recusandae aut officia delectus minima! Enim,
            cupiditate!</p>
    </section>

    <div class="container">
        <h2>Contact</h2>
        <div>
            <form action="../controllers/form_contact.php" method="POST">
                <div>
                    <label for="email">Votre email:</label>
                    <input type="email" id="email" name="email" placeholder="xxx@zz.net">
                </div>
                <div class="form-group">
                    <label for="first_name">Votre prénom suivi de votre nom:</label>
                    <input type="text" name="nom" placeholder="Prenom Nom">
                </div>

                <div>
                    <label for="txt">On vous écoute.</label>
                    <textarea name="txt" rows="10"></textarea>
                </div>
                <hr>

                <button type="submit">Envoyer</button>
            </form>
        </div>
    </div>



</body>

</html>