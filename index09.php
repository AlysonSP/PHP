<?php
class MinhaExcecao extends Exception {
    public function __construct($mensagem = "", $codigo = 0, Throwable $anterior = null) {
        parent::__construct($mensagem, $codigo, $anterior);
    }
}

try {
    throw new MinhaExcecao("Não tem erro se não existir nada");
} catch (MinhaExcecao $excecao) {
    $mensagem = "Erro: " . $excecao->getMessage();
    echo $mensagem;
    $log = date('Y-m-d H:i:s') . ' - ' . $mensagem . "\n";
    file_put_contents('erro.log', $log, FILE_APPEND);
}
?>
