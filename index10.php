<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <h1>selecionar o produto</h1>
    <form action="index10.php">
        <label for="radio">memoria</label>
        <input type="radio" name="prod" id="men"value="mem"><br>
        <label for="proc">processador</label>
        <input type="radio" name="prod" id="proc"value="proc"><br>
        <label for="ssd">ssd</label>
        <input type="radio" name="prod" id="ssd"value="ssd"><br>
        <input type="number" name="qtd" id="" placeholder="Quantidade de itens">
        <button type="submit" class="btn btn-outline-success">Calcular</button>
    </form>
    <?php
        if (isset($_GET['prod']) && isset($_GET['qtd'])) {
            $produto= $_GET['prod'];
            $quantidade = $_GET['qtd'];

            class Produto{
                public $nome;
                public $preco;
                public $quantidade;

                public function __construct($nome,$qtd){
                    $this->nome = $nome;
                    switch($this->nome){
                        case "men": $this->preco = 120; $this->nome= "memoria"; break;
                        case "proc": $this->preco = 1200; $this->nome= "processador"; break;
                        case "ssd": $this->preco = 320; $this->nome= "ssd"; break;
                    }
                    $this->quantidade = $qtd;
                }
        
                public function calcularTotal(){
                    return "o valor total é: ".$this->preco * $this->quantidade;
                }
        
                public function imprimirDetalhes(){
                    return "o produto ". $this->nome . " na quantidade ". $this->quantidade . " sai por " . $this->calcularTotal();
                }
            }

            $prod = new Produto($produto,$quantidade);
            echo "<h6>". $prod->imprimirDetalhes()."</h6>";
        }
    ?>
      
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>