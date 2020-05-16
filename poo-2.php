<?php
    Class Conta {
        public $saldo = 500;
        public $titular;

        function levantar($valor){

        }

        function depositar($valor){

        }

        function verSaldo(){

        }
    }
                            
    $conta1 = new Conta();
    $conta1->depositar(500);
    $conta1->levantar(20);

    $conta2 = new Conta();
    $conta2->depositar(250);
    $conta2->verSaldo();
?>
