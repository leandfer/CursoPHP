<?php

    $conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");

    $stmt = $conn->prepare("insert into tb_usuarios(deslogin,dessenha) values(:LOGIN,:PASSWORD)");

    $login = "jose";
    $password = "2323n4k23";

    $stmt->bindParam(":LOGIN", $login);
    $stmt->bindParam(":PASSWORD",$password);

    $stmt->execute();

    echo "inserido OK!";

?>