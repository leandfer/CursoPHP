<?php

//include "inc/exemplo-01.php"; //include tenta continuar mesmo com erro
require_once "inc/exemplo-01.php"; //require obriga que o arquivo exista se nao para e da erro fatal
require_once "inc/exemplo-01.php";

    $resultado = somar(10, 25);

    echo $resultado;

?>