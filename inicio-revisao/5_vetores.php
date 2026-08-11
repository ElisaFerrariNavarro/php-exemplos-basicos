<?php

// vetor (array simples)

$frutas =["Maçã", "banana", "uva"];


//exibe valores
foreach ($frutas as $indice => $fruta) {
    echo "Posição $indice: $fruta <br>";
}



//array
echo "<br>";
echo "Lista de pilotos: <br>";
echo "<br>";
$matriz = [
    ["Max Verstappen", "Oscar Piatris", "Lando Norris"],
    ["Charles Leclerc", "Lewis Hamilton", "George Russel"],
    ["Fernando Alonso", "Carlos Sainz", "Gabriel Bortoleto"]
];

//exibindo valores de matriz 
foreach ($matriz as $linha) {
    foreach ($linha as $piloto) {
        echo $piloto . " | ";
    }
    echo "<br>";
}
