<?php
    class Conta {
        public function depositar($valor){

        }
        final public function levantar($valor){ // método final, não pode ser reescrito

        }
    }

    class ContaCorrente extends Conta{
        public function depositar(){

        }
    } 
?>