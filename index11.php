<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
    <style>
		body {
            background: rgb(27,121,9);
            background: left linear-gradient(90deg, rgba(27,121,9,1) 35%, rgba(8,114,14,1) 39%, rgba(255,0,0,1) 100%);	
            color: #fff;
            text-align: center;
            margin-top: 22%;
            font-weight: 900;
            font-size: x-large;
		}
	</style>
</head>
<body>
<?php
class Pessoa {
    private $nome;
    private $idade;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }
}
class ContaBancaria {
    private $titular;
    private $saldo;
    private $tipoConta;

    public function __construct($titular, $tipoConta) {
        $this->titular = $titular;
        $this->tipoConta = $tipoConta;
        $this->saldo = 0;
    }

    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function sacar($valor) {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
        } else {
            echo "Saldo insuficiente."."<br>";
        }
    }

    public function verSaldo() {
        return $this->saldo;
    }
}
$conta1 = new ContaBancaria("Alyson", "corrente");
$conta2 = new ContaBancaria("Nycole", "poupança");

$conta1->depositar(1000);
$conta2->depositar(500);

$conta1->sacar(200);
$conta2->sacar(1000);

echo "Saldo da conta 1: ". "<br>". $conta1->verSaldo() . "<br>";
echo "Saldo da conta 2: " ."<br>". $conta2->verSaldo() . "<br>";
?>
    
</body>
</html>