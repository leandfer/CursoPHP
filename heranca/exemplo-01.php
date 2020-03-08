<?php
    
    class Documento{
        private $numero;

        public function getNumero(){
            return $this->numero;
        }

        public function setNumero($numero){
            $this->numero = $numero;
        }
    }

    class Cpf extends Documento{
        public function validar():bool{
            $numeroCpf = $this->getNumero();
            return true;
        }
    }

    $doc = new Cpf();

    $doc->setNumero("05147459910");

    var_dump($doc->validar());
    echo "</br>";

    echo $doc->getNumero();



?>