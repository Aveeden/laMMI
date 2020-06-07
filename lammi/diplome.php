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
    <title>L'aMMI | Les diplômes</title>
</head>

<body>
    <audio src="sounds/Ambiance.mp3" autoplay loop></audio>
    <a href="menu.html"><img class="logo" src="img/logo-protut.png"></a>
    <h1>Les diplômes</h1>
    <h3>Après la MMI ... Vous avez le choix !</h3>

    <p class="">Les écoles des métiers du web et du multimédia accueillent les diplômés d’un DUT MMI. Des admissions parallèles
        permettent d’intégrer un cursus de bachelor directement en troisième année. La troisième année sert généralement
        de spécialisation.</p>
        <p class="">Intégrer une école permet donc de se former à son futur métier, et de bénéficier du réseau d’anciens étudiants
        de l’école. De plus, la formation en école est davantage portée sur la pratique que la formation de DUT. Parmi
        les bachelors proposés en écoles du multimédia, vous pourrez trouver les parcours Chargé de projet digital,
        Stratégie digitale, Création, Motion Design, Design & Stratégies digitales et le bachelor informatique.</p>
        <p class="">Après l’obtention du bachelor, vous pourrez commencer à travailler ou poursuivre vos études en master par exemple si vous le
        souhaitez.
    </p>
    <h2>La liste des diplômes d'après-MMI</h2>
<?php $sql = "SELECT diplome.*, ecole.* ,(diplome.nom) as intitule 
FROM `formation`, `diplome`, `ecole` 
WHERE diplome.id=1 
AND formation.id_diplome=diplome.id 
AND formation.id_ecole=ecole.id";

$req = $db -> prepare($sql);
$req -> execute();

while($data = $req -> fetch()){
    echo '<p>'.$data['intitule'].' '.'<b>'.', disponible ici: '.'</b>'.$data['nom'].'</p>';
}

$req = null;
?>
</body>

</html>