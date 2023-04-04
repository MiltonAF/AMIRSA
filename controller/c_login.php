<?php

if(!empty($_POST['btn_login'])){
    if(!empty($_POST['user'] || !empty($_POST['pass']))){
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $sql = $conex -> query(" select * from usario where usuario = '$user' and contraseña = '$pass' ");
        echo ($sql);
        

    }else{
        echo ('campos vacios');
    }
}

?>