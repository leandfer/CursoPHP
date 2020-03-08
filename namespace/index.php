<?php

    require_once("config.php");

    use Cliente\Cadastro;

    $cad = new Cadastro();

    $cad->setNome("Leandro Ferreira");
    $cad->setEmail("ledferr@gmail.com");
    $cad->setSenha("15124654");

    $cad->registrarVenda();


?>