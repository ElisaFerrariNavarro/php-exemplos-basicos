<?php

//passando valores pela url
// http://localhost/php-exemplos-basicos/2_opera_variaveis.php?numero1=10&numero2=5

//método nativo do php 
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];


if (isset($numero1) && ($numero2)) {

$numero1 = (float)$numero1;
$numero2 = (float)$numero2;


$soma = $numero1 + $numero2;
$subtracao = $numero1 - $numero2;
$multiplicacao = $numero1 * $numero2;
$divisao = $numero1 / $numero2;

}

//exibir

echo "Soma:  $soma <br>";
echo "Subtração:  $subtracao <br>";
echo "Multiplicação:  $multiplicacao <br>";
echo "Divisão:  $divisao <br>";