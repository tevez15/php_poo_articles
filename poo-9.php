<?php
class Conta {
    
    public $saldo = 0;
    
    public function getSaldo()
    {
        echo "Saldo Actual: {$this->saldo}";
    }
} 

trait Accoes {
    
    public function depositar($valor)
    {
        $this->saldo += $valor;
    }
    
    public function levantar($valor)
    {
        if($this->saldo >= $valor){
            $this->saldo -= $valor;
        }
    }
}

trait consultarExtracto {
    
    public function getSaldo()
    {
        echo "Saldo Disponivel para levantamento:{$this->saldo}<br>";
    }
    
    public function gerarExtracto($periodo)
    {
        echo "A gerar extracto no período de $periodo, por favor aguarde...";
    }
} 

class ContaCorrente extends Conta {
    use Accoes, consultarExtracto;
} 

$conta = new ContaCorrente();
$conta->depositar(500);
$conta->levantar(200);
$conta->getSaldo();
$conta->gerarExtracto('20/01/2013');

?>
