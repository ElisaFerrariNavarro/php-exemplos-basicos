<?php

$preco = 100;

$quantidade = 3;

//cálculo

$calculo =  $preco * $quantidade;

if ($calculo >= 200) {
    $desconto = 0.10 * $calculo;
    $final = $calculo - $desconto;
    echo "Sua conta recebeu 10% de desconto, o preço final é:  $final";
} else {
    echo "Sua compra não recebeu desconto, o preço final é: $calculo";
}
