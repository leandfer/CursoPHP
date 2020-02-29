<?php

    $nome = "Leandro";

    function teste(){
        global $nome;
        echo $nome;
    }

    function teste2(){
        $nome = "Ferreira";
        echo "Teste 2: " . $nome;
    }


    teste();
    teste2();

?>