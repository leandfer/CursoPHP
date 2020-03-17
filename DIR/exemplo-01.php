<?php

    $name = "images";

    if(!is_dir($name)){
        mkdir($name);
        echo "Diretorio $name criado com sucesso";
    }else{
        rmdir($name);
        echo  "Já Existe o Diretorio $name foi removido";
    }


?>