<?php 
  include('lib/app.php');
  $db = getDatabase();
  ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styled.css">
    <link rel="stylesheet" href="css/polices.css">
    <title>Écoles</title>
</head>
<body>
<audio src="sounds/Ambiance.mp3" autoplay loop></audio>
<a href="menu.html"><img class="logo" src="img/logo-protut.png"></a>

    <h1>Les Écoles</h1>

    <p>Après la MMI, beaucoup d'écoles sont prêtes à accueillir les tout-nouveaux diplômés pour leur permettent de poursuivre leurs études.
        Nombreuses sont ces écoles, donc voici un récapitulatif pour vos permettrent de vous y retrouver !
    </p>

    <?php $sql = "SELECT diplome.*, ecole.* ,(diplome.nom) as intitule 
FROM `formation`, `diplome`, `ecole` 
WHERE ecole.id=1 
AND formation.id_ecole=ecole.id 
AND formation.id_diplome=diplome.id";

$req = $db -> prepare($sql);
$req -> execute();

while($data = $req -> fetch()){
    echo '<p>'.$data['nom'].' '.'<b>'.', propose ceci: '.'</b>'.$data['intitule'].'</p>';
}

$req = null;
?>

</body>
</html>
