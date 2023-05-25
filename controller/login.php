<?php
require '../model/connection.php';
session_start();

$username = $_POST['user'];
$password = $_POST['pass'];

if (empty($username) || empty($password)) {

    echo "Datos vacios";

} else {
    $sql = "SELECT COUNT(*) AS contar FROM users WHERE usernames = '$username' AND password = '$password'";
    $consult = mysqli_query($conn, $sql);
    $array = mysqli_fetch_array($consult);

    if ($array['contar'] > 0) {
        $_SESSION['username'] = $username;
        header("location: ../dashboard.php");

    } else {

        echo "Datos incorrectos";
    }
}

?>