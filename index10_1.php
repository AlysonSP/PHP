<!DOCTYPE html>
<html>
<head>
	<title>Cachorro Caramelo</title>
	<style>
		body {
			background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
			color: #fff;
            text-align: center;
            font-weight: 900;
            font-size: x-large;
		}
	</style>
</head>
<body>
	<?php
		abstract class Animal {
			protected $nome;
			protected $tipo;

			public function __construct($nome, $tipo) {
				$this->nome = $nome;
				$this->tipo = $tipo;
			}

			abstract public function emitirSom();
		}

		class Cachorro extends Animal {
			public function emitirSom() {
				echo "O cachorro {$this->nome} está latindo."."<br>";
			}
		}

		class Gato extends Animal {
			public function emitirSom() {
				echo "O gato {$this->nome} está miando.";
			}
		}

		$cachorro = new Cachorro("Kira", "Cachorro");
		$cachorro->emitirSom();
        
		$gato = new Gato("Thor", "Gato");
		$gato->emitirSom();
	?>
</body>
</html>