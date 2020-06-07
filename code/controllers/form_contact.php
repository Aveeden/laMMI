<?php
  include('../lib/app.php');

  if($_SERVER['request_method'] =='post'){
    $db = getDatabase();

    $sql = "INSERT INTO form_contact (prenom, nom, age, email, txt,) VALUES (:prenom, :nom, :age, :email, :txt)";

    $attributes = array(
      'prenom' => $_POST['prenom'],
      'nom' => $_POST['nom'],
      'age' => $_POST['age'],
      'email' => $_POST['email'],
      'txt' => $_POST['txt']
    );

    $stmt = $db->prepare($sql);
    $stmt->execute($attributes);

    $db = null;

    header('Location: ../menu.php?success=true');
  }else{ 
    http_response_code(500);
  }

?>