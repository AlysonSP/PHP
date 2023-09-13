<?php
class Veiculo {
    public $modelo;
    public $marca;
    public $ano;
    public $cor;
  
    public function __construct($modelo, $marca, $ano, $cor) {
      $this->modelo = $modelo;
      $this->marca = $marca;
      $this->ano = $ano;
      $this->cor = $cor;
    }
  }
  
  class Carro extends Veiculo {
    public $quantidadeDePortas;
  
    public function __construct($modelo, $marca, $ano, $cor, $quantidadeDePortas) {
      parent::__construct($modelo, $marca, $ano, $cor);
      $this->quantidadeDePortas = $quantidadeDePortas;
    }
  }
  
  class Moto extends Veiculo {
    public $cilindrada;
  
    public function __construct($modelo, $marca, $ano, $cor, $cilindrada) {
      parent::__construct($modelo, $marca, $ano, $cor);
      $this->cilindrada = $cilindrada;
    }
  }
  
  $carro = new Carro("Fiesta", "Ford", 2010, "Preto", 4);
  $moto = new Moto("CG", "Honda", 2021, "Vermelho", 150);
  
  echo "Carro: " . $carro->modelo . " " . $carro->marca . " " . $carro->ano . " " . $carro->cor . " " . $carro->quantidadeDePortas . " portas" . "<br>";
  echo "Moto: " . $moto->modelo . " " . $moto->marca . " " . $moto->ano . " " . $moto->cor . " " . $moto->cilindrada . " cc";
?>