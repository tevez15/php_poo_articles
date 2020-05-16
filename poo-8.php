<?php
class Conta {
    
    public $saldo = 0;
    
    public function getSaldo() 
    {
        echo "Saldo Actual: {$this->saldo}"; 
    }
    
}

trait Accoes {
    
    public function getSaldo()
    {
        echo "Saldo Disponivel: {$this->saldo}";
    }

    public function depositar($valor)
    {
        $this->saldo += $valor;
    }    

    public function levantar($valor)
    {
        if ($this->saldo >= $valor) {
            $this->saldo -= $valor;           
        }
    } 
}

class ContaCorrente extends Conta {
    use Accoes;
}

$conta = new ContaCorrente();
$conta->depositar(500);
$conta->levantar(200);
$conta->getSaldo();

// Saldo Disponivel: 300
?>