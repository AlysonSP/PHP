<?php 
$notas = array(7.5, 6.5, 8.5, 9.0, 7.0);

$media = array_sum($notas) / count($notas);

echo "A média das notas é: " . $media;
?>