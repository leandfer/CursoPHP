<?php

    $pessoas = array();

    array_push($pessoas, array(
        'nome' => 'Leandro',
        'idade' => 20
    ));

    array_push($pessoas, array(
        'nome' => 'Ferreira',
        'idade' => 25
    ));

    echo json_encode($pessoas);

?>