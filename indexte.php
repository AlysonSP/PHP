<!DOCTYPE html>
<html>
<head>
  <title>Relampago Marquinhos</title>
  <style>
    body{
        background-color: grey;

    }
    .marquinhos{
        color:white;


    }

  </style>
</head>
<body>
  <div class="marquinhos">
    <?php
    class Carro {
        private $velocidadeMaxima;
        private $velocidadeAtual;

        public function __construct($velocidadeMaxima) {
            $this->velocidadeMaxima = $velocidadeMaxima;
            $this->velocidadeAtual = 0;
        }

        public function acelerar() {
            while ($this->velocidadeAtual < $this->velocidadeMaxima) {
                $this->velocidadeAtual += 20;
                echo "Velocidade atual: " . $this->velocidadeAtual . " km/h\n";
            }
        }

        public function frear() {
            while ($this->velocidadeAtual > 0) {
                $this->velocidadeAtual -= 30;
                if ($this->velocidadeAtual < 0) {
                    $this->velocidadeAtual = 0;
                }
                echo "Velocidade atual: " . $this->velocidadeAtual . " km/h\n";
            }
        }

        public function getVelocidadeAtual() {
            return $this->velocidadeAtual;
        }
    }

    $carro = new Carro(200);
    $carro->acelerar();
    $carro->frear();
    ?>
  </div>
</body>
</html>