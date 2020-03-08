<?php

    class Pessoa{

        public $nome = "Rasmus Lerdorf";
        protected $idade = 45; //dentro da propria classe e classe herdada
        private $senha = "123456"; //somente a propria classe

        public function verDados(){
            echo $this->nome . "</br>";
            echo $this->idade . "</br>";
            echo $this->senha . "</br>";
        }

    }

    $objeto = new Pessoa();

    //echo $objeto->nome . "</br>";
    //echo $objeto->idade . "</br>";
    //echo $objeto->senha . "</br>";

    $objeto->verDados();


    


?>