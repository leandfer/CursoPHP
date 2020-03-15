<?php

    require_once("config.php");
    //---Carrega um usuario
    //$root = new Usuario();
    //$root->loadById(6);

    //---carrega uma lista de usuarios
    //$lista = Usuario::getList();
    //echo json_encode($lista);

    //---carrega uma lista de usuarios buscando pelo login
    //$search = Usuario::search("le");
    //echo json_encode($search);

    //--buscanco pelo login e senha
    $usuario = new Usuario();
    $usuario->login("Dionizio","sadfsdg");
    echo $usuario;
?>