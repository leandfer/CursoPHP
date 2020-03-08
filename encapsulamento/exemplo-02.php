<?php

    class Pessoa{

        public $nome = "Rasmus Lerdorf";
        protected $idade = 45; //dentro da propria classe e classes extendidas
        private $senha = "123456"; //somente a propria classe

        public function verDados(){
            echo $this->nome . "</br>";
            echo $this->idade . "</br>";
            echo $this->senha . "</br>";
        }

    }

    class Programador extends Pessoa{

        public function verDados(){
            echo get_class($this) . "</br>";
            echo $this->nome . "</br>";
            echo $this->idade . "</br>";
            echo $this->senha . "</br>";
        }

    }

    $objeto = new Programador();


    $objeto->verDados();


    


?>