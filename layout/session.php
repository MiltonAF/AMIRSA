<!--Este codigo es para realizar el manejo de sessiones -->
<?php

require 'model/connection.php';

session_start();
$user = $_SESSION['username'];

if (!isset($user)) {
    header("Location: index.php");
}

$sql = "SELECT * FROM usuario WHERE usuario = '$user'";
$consult = mysqli_query($conn, $sql);
$array = mysqli_fetch_array($consult);

$cedula = $array['cedula'];

$date = "SELECT * FROM empleados WHERE cedula = '$cedula'";
$con = mysqli_query($conn, $date);
$vec = mysqli_fetch_array($con);



?>