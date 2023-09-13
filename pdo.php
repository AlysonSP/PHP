<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agenda</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    
      body {
        align-items: center;
        justify-content: center;
      
        margin-top: 15rem;
        background-color: #212529;
        color: green;
        font-weight: 700;
      }

      .table {
        color: white;
      }

      .table th,
      .table td {
        border:  1px solid;
        border-color: whitesmoke;
      }
    
  </style>
</head>
<body>
  <div class="container">
    <h1></h1>

    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Telefone</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $dsn = "mysql:host=localhost;dbname=agenda";
        $user = "root";
        $pass = "";

        try {
          $pdo = new PDO($dsn, $user, $pass);
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          echo "Conectado";
        } catch (PDOException $e) {
          echo "Erro ao conectar: " . $e->getMessage();
        }

        $query = "SELECT * FROM contato";
        $resultado = $pdo->query($query);

        foreach ($resultado as $linha) {
          echo '<tr>';
          echo '<td>' . $linha['id'] . '</td>';
          echo '<td>' . $linha['nome'] . '</td>';
          echo '<td>' . $linha['tel'] . '</td>';
          echo '<td>' . $linha['email'] . '</td>';
          echo '</tr>';
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
