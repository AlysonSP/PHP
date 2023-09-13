<?php


class Pessoa {
    protected $nome;
    protected $idade;
    protected $sexo;
    
    public function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
    }
    
    public function __get($attr) { 
        return $this->$attr;
    }
    
    public function __set($attr, $valor) {
        $this->$attr = $valor;
    }
}

class Cliente extends Pessoa {
    protected $codigo;
    
    public function __construct($nome, $idade, $sexo, $codigo) {
        parent::__construct($nome, $idade, $sexo);
        $this->codigo = $codigo;
    }
    
    public function comprar() {
        echo "Comprou";
    }
}

class Funcionario extends Pessoa {
    protected $cargo;
    protected $salario;
    
    public function __construct($nome, $idade, $sexo, $cargo, $salario) {
        parent::__construct($nome, $idade, $sexo);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }
}

$cliente = new Cliente("Alyson", 30, "Masculino", 123);
$funcionario = new Funcionario("Manoel Gomes", 25, "Azul", "Gerente", 5000);

echo "Cliente: " . $cliente->nome . " " . $cliente->idade . " " . $cliente->sexo . " " . $cliente->codigo . "<br>";
echo "Funcionário: " . $funcionario->nome . " " . $funcionario->idade . " " . $funcionario->sexo . " " . $funcionario->cargo . " " . $funcionario->salario;

?>

