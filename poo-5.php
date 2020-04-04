<?php
    abstract class Conta {
        
        public $saldo = 0;
        
        public function levantar()
        {

        }
                                        
        public function depositar($valor)
        {

        }
    }

    class ContaPoupanca extends Conta {
        public function resgatar($valor) 
        {
            
        }
    }

    $conta1 = new ContaPoupanca();
    $conta1->depositar(500);
    $conta1->resgatar(250); 
?>
