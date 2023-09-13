<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        body {
            padding: 20px;
            background-color: gray;
            color: white;
        }

        h1 {
            margin-bottom: 20px;
            color: green;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }
 
        input[type="text"],
        input[type="email"] {
            padding: 5px;
            margin-bottom: 10px;
        }

        .mensagem-sucesso {
            background-color: green;
            color: white;
            padding: 10px;
        }

        .mensagem-erro {
            background-color: red;
            color: white;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Formulário</h1>
    <form method="GET" action="processa.php">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <input type="submit" value="Enviar">
    </form>


</body>
</html>
