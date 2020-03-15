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
    //$usuario = new Usuario();
    //$usuario->login("Dionizio","sadfsdg");
    //echo $usuario;

    //--criando um novo usuario
    //$aluno = new Usuario("Maria", "@!#$%");
    //$aluno->insert();
    //echo $aluno;

    //-alterear um usuario
    /*
    $usuario = new Usuario();
    $usuario->loadById(8);
    $usuario->update("professor", "98765");
    echo $usuario;
    */

    $usuario = new Usuario();
    $usuario->loadById(10);
    $usuario->delete();

    echo $usuario;
?>