<?php
$nome_arquivo = "exemplo.txt";

if (file_exists($nome_arquivo)) {
  $arquivo = fopen($nome_arquivo, "r");
  $conteudo = fread($arquivo, filesize($nome_arquivo));
  fclose($arquivo);
  
} else {
  $conteudo = "O arquivo não existe.";
}
?>

<!DOCTYPE html>
<html>
<head>
  <style>
    .conteudo-arquivo {
        color:red;
      border: 1px solid gray;
      padding: 10px;
      background-color: #f2f2f2;
      font-family: Arial, sans-serif;

    }
  </style>
</head>
<body>
  <div class="conteudo-arquivo">
    <?php echo $conteudo; ?>
  </div>
</body>
</html>
