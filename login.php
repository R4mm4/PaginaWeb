<?php

  session_start();
  require 'database.php';
  $correo =$_POST['correo'];
  $contrasena =$_POST['contrasena'];


  if (!empty($_POST['correo']) && !empty($_POST['contrasena'])) {
    $records = $conn->prepare('SELECT id, correo, contrasena FROM usuario WHERE correo = :correo');
    $records->bindParam(':correo', $_POST['correo']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['contrasena'], $results['contrasena'])) {
        $_SESSION['correo']=$correo;
        header("location:index.php");
    } else {
      $message = 'Datos erroneos';
    }
  }

?>
