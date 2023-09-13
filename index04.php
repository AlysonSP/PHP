<?php
$idade = 18;
$nome = "Alyson";

if ($idade >= 18) {
    $opcao = 1;
} else if ($idade > 0 && $idade < 18) {
    $opcao = 2;
} else {
    $opcao = 3;
}

switch ($opcao){
    case 1:
        echo $nome . " pode dirigir por ser maior de idade.";
        break;
    case 2:
        echo $nome . " não pode dirigir por ser menor de idade.";
        break;
    case 3:
        echo $nome . ",parece que você ainda está na zoeira?";
        break;
}
?>
