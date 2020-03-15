<?php

    $conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "235689");

    $stmt = $conn->prepare("update tb_usuarios set deslogin = :LOGIN, dessenha = :PASSWORD where idusuario = :ID");

    $login = "Dionizio";
    $password = "sadfsdg";
    $id = "3";

    $stmt->bindParam(":LOGIN", $login);
    $stmt->bindParam(":PASSWORD",$password);
    $stmt->bindParam(":ID", $id);


    $stmt->execute();

    echo "Alterado OK!";


?>