<!--Este codigo es para realizar el manejo de sessiones -->
<?php

require 'model/connection.php';

session_start();
$user = $_SESSION['username'];

if (!isset($user)) {
    header("Location: index.php");
}

$sql = "SELECT * FROM users WHERE usernames = '$user'";
$consult = mysqli_query($conn, $sql);
$array = mysqli_fetch_array($consult);

$cedula = $array['id_card'];

$date = "SELECT * FROM employees WHERE id_card = '$cedula'";
$con = mysqli_query($conn, $date);
$vec = mysqli_fetch_array($con);



?>