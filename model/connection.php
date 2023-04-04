<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'Amirsa';

$conn = mysqli_connect($server, $user, $pass, $db);

if(!$conn){
    die("Conexion Fallida");
}


?>