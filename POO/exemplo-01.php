<?php

    class Pessoa{

        public $nome;

        public function falar(){
            return "O meu Nome é " . $this->nome;
        }

        


    }


    $leandro = new Pessoa();
    $leandro->nome = "Leandro Ferreira";
    echo $leandro->falar();

?>