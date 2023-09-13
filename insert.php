<?php
    $dsn = "mysql:host=localhost;dbname=agenda";
    $user = "root";
    $pass = "";
    
    $pdo = new PDO ($dsn, $user, $pass);

    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $telefone = $_GET['tel'];

    $sql = "INSERT INTO contato (nome, numeroCelular, email) VALUES ('$nome', '$tel', '$email')";
    $resultado = $pdo->exec($sql);
    echo $resultado;

    $query = "SELECT * FROM contato WHERE nome = '$nome'";
        $resultado = $pdo->query($query);
        foreach($resultado as $linha){
            echo 
                "<tr>
                <th scope='row'>" . $linha ['id'] . "</th>
                <td>" . $linha ['nome'] . "</td>
                <td>" . $linha ['email'] . "</td>
                <td>" . $linha ['tel'] . "</td>
                </tr>";
        }
?>