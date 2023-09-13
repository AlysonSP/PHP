<?php

abstract class Forma {
  abstract public function calcularArea();
}
class Circulo extends Forma {
  private $raio;

  public function __construct($raio) {
    $this->raio = $raio;
  }

  public function calcularArea() {
    return pi() * pow($this->raio, 2);
  }
}
class Quadrado extends Forma {
  private $lado;

  public function __construct($lado) {
    $this->lado = $lado;
  }

  public function calcularArea() {
    return pow($this->lado, 2);
  }
}
class Triangulo extends Forma {
  private $base;
  private $altura;

  public function __construct($base, $altura) {
    $this->base = $base;
    $this->altura = $altura;
  }

  public function calcularArea() {
    return ($this->base * $this->altura) / 2;
  }
}

$formas = array(
  new Circulo(5),
  new Quadrado(4),
  new Triangulo(3, 6)
);

foreach ($formas as $forma) {
  echo "Área da forma: " . $forma->calcularArea() . "<br>";
}
?>
