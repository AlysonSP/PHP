<!doctype html>
<html lang="pt-br">
  <head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <style>
    body{
      background: rgb(0,0,0);
background: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(3,3,64,1) 52%, rgba(0,0,0,1) 100%);
    }
  </style>

  <body>

   <h1 style="width: 35rem; height: 5rem;color:white;text-align: center;justify-content: center;align-items:center;margin: 0 auto;padding:0 auto"> Tabela</h1>
  <div class="container">   
    <form action="indexsel.php" class="mt-5 text-center">
      <div class="formulario" class="form-row" style="width: 50%;margin:0 auto;padding:0 auto;justify-content:center;align-items:center;text-align:center; ">
      <div class="col">
    <input class="form-control" type="text" name="id" id="id" placeholder="ID">
    <input class="form-control mt-2" type="text" name="nome" id="nome" placeholder="NOME">
  </div>
  <div class="col">
    <input class="form-control mt-2" type="text" name="tel" id="tel" placeholder="TELEFONE">
    <input class="form-control mt-2" type="text" name="email" id="email" placeholder="E-MAIL">
</div>
  </div>
    <button class="btn btn-outline-success mt-2" type="submit">Buscar</button>
    <button class="btn btn-outline-primary mt-2" type="submit">Inserir</button>

    </form>
    <br>
       </div>
       <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOME</th>
      <th scope="col">TELEFONE</th>
      <th scope="col">E-MAIL</th>
    </tr>
  </thead>
  <tbody>
       <?php
       require "select.php";
       if (!empty($_GET['nome']) && !empty($_GET['email'] && !empty($_GET['tele']))){
        require "insert.php";
       }
       ?>
  </tbody>
       </table>
  </div>
      

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>