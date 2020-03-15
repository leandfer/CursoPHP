<?php

    $conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "235689");

    $stmt = $conn->prepare("delete from tb_usuarios where idusuario = :ID");

    $id = "5";

    $stmt->bindParam(":ID", $id);

    $stmt->execute();

    echo "Deletado OK!";


?>