<?php
    class Conta{
        public $saldo = 0;
                    
        function depositar($valor) {
                                
        }
                                
        function levantar() {
                                
        }
    }


    class ContaCorrente extends Conta {
        function transferir($contaDestino, $valor){
            $this->saldo -= $valor;
        }
    }

    $novaConta = new ContaCorrente();
    $novaConta->transferir('xxx-xxx', 500);
    
    echo "Saldo: " . $novaConta->saldo;                
?>