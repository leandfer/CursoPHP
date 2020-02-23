<?php
    $anoNascimento = 1923;
    $nomeCompleto = "Leandro Ferreira";
    //Cometario Simples - Na linha de baixo temos uma variavel com string e um numero
    $nome1 = "Leandro";

    $sobrenome = "Dionizio";

    $nomeCompleto = $nome1 . " " . $sobrenome;

    echo $nomeCompleto;

    exit;
    
    echo $nome1;

    echo "</br>";
    unset($nome1);

    if(isset($nome1)){
        echo $nome1;
    }
    

    
?>