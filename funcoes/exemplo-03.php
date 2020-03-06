<?php
/*
    function ola($testo = "Mundo", $periodo = "Bom Dia"){
        return "Ola $testo! $periodo!";
    }
*/
    function ola($testo, $periodo = "Bom Dia"){
        return "Ola $testo! $periodo!";
    }



    echo ola("Mundo");
    echo "</br>";

    echo ola("", "Boa Noite");
    echo "</br>";

    echo ola("Leandro", "Boa Tarde");
    echo "</br>";

    echo ola("Ferreira", "");
    echo "</br>";

?>