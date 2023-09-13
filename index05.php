<?php
function contarCaracteres($string) {
    return strlen($string);
}

$texto = "Alyson Silva Prado";
$resultado = contarCaracteres($texto);
echo "A quantidade de caracteres na string é: " . $resultado;
?>
