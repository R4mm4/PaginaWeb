<?php

$usuario = $_POST['correo'];
$pass = $_POST['contrasena'];

if($usuario === '' || $pass=== ''){
    echo json_encode('error');
}else{
    echo json_encode('Correcto: <br>correo:'.$usuario.'<br>contrasena:'.$pass);
}