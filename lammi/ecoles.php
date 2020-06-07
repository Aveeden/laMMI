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
    <h1>Les Écoles</h1>

    <?php $sql = "SELECT diplome.*, ecole.* ,(diplome.nom) as intitule 
FROM `formation`, `diplome`, `ecole` 
WHERE ecole.id=1 
AND formation.id_ecole=ecole.id 
AND formation.id_diplome=diplome.id";

$req = $db -> prepare($sql);
$req -> execute();

while($data = $req -> fetch()){
    echo '<p>'.$data['nom'].' '.'<b>'.', disponible ici: '.'</b>'.$data['intitule'].'</p>';
}

$req = null;
?>

</body>
</html>