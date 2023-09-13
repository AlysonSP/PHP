<?php
if (isset($_GET['mensagem'])) {
    if ($_GET['mensagem'] == 'sucesso') {
        echo '<div class="mensagem-sucesso">Sua informação foi inserida com sucesso!</div>';
    } elseif ($_GET['mensagem'] == 'erro') {
        echo '<div class="mensagem-erro">Preencha os campos corretamente!</div>';
    }
}

if (isset($_GET['nome']) && isset($_GET['email'])) {
    $nome = $_GET['nome'];
    $email = $_GET['email'];

    echo '<div>Dados do formulário:</div>';
    echo '<div>Nome: ' . $nome . '</div>';
    echo '<div>E-mail: ' . $email . '</div>';
}
?>
