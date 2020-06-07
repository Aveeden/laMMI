<?php
  include('../lib/app.php');

  if($_SERVER['REQUEST_METHOD'] =='POST'){
    $db = getDatabase();

    $sql = "INSERT INTO form_contact (nom, email, txt) VALUES (:nom, :email, :txt)";

    $attributes = array(
      ':nom' => $_POST['nom'],
      ':email' => $_POST['email'],
      ':txt' => $_POST['txt']
    );

    $stmt = $db -> prepare($sql);
    $stmt -> execute($attributes);

    $db = null;

    header('Location: ../equipeammi.php?success=true');
  }else{ 
    http_response_code(500);
  }

?>