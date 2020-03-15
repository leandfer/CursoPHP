<?php

    $conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "235689");

    $stmt = $conn->prepare("insert into tb_usuarios(deslogin,dessenha) values(:LOGIN,:PASSWORD)");

    $login = "leferreira";
    $password = "45154";

    $stmt->bindParam(":LOGIN", $login);
    $stmt->bindParam(":PASSWORD",$password);

    $stmt->execute();

    echo "inserido OK!";

    echo "</br>";

    echo "Teste";

?>