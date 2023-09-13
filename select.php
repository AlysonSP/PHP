<?php
    $dsn = "mysql:host=localhost;dbname=agenda";
    $user = "root";
    $pass = "";
    
    $pdo = new PDO ($dsn, $user, $pass);
    
    if(!empty($_GET['id']) && !empty($_GET['nome']) || !empty($_GET['id']) && empty($_GET['nome'])){
        $id = $_GET['id'];

        $query = "SELECT * FROM contato WHERE id = '$id'";
        $resultado = $pdo->query($query);
        foreach($resultado as $linha){
            echo 
                "<tr>
                <th scope='row'>" . $linha ['id'] . "</th>
                <td>" . $linha ['nome'] . "</td>
                <td>" . $linha ['tel'] . "</td>
                <td>" . $linha ['email'] . "</td>
                </tr>";
            }

    }elseif (empty($_GET['id']) && !empty($_GET['nome'])) {
        $nome = $_GET['nome'];
        $query = "SELECT * FROM contato WHERE nome = '$nome'";
        $resultado = $pdo->query($query);
        foreach($resultado as $linha){
            echo 
                "<tr>
                <th scope='row'>" . $linha ['id'] . "</th>
                <td>" . $linha ['nome'] . "</td>
                <td>" . $linha ['tel'] . "</td>
                <td>" . $linha ['email'] . "</td>
                </tr>";
            }

    }else{
        $query = "SELECT * FROM contato";
        $resultado = $pdo->query($query);
                    
        foreach($resultado as $linha){
            echo 
                "<tr>
                <th scope='row'>" . $linha ['id'] . "</th>
                <td>" . $linha ['nome'] . "</td>
                <td>" . $linha ['tel'] . "</td>
                <td>" . $linha ['email'] . "</td>
                </tr>";
            }
    }
?>