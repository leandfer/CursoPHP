<?php

    $conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "235689");

    $conn->beginTransaction();

    $stmt = $conn->prepare("delete from tb_usuarios where idusuario = ?");

    $id = "4";

    $stmt->execute(array($id));

    //$conn->rollback();
    $conn->commit();

    echo "Deletado OK!";


?>