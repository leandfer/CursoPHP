<?php
    //SQL Server
    $conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0","login","senha");

    $stmt = $conn->prepare("select * from tb_usuarios order by deslogin");

    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($results as $row) {
        foreach ($row as $key => $value) {
            echo "<strong>" . $key . ":</strong>" . $value . "</br>";
        }

        echo "==================================================</br>";
        
    }



?>