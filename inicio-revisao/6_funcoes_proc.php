<?php

//função simples com retorno

function somar(float $a, $b): float {
    return $a + $b;
}

//exibe o resultado
echo "Resultado da função ╰(*°▽°*)╯: ";
echo "<br>";
echo somar (4, 8.3);
echo "<br>";

//procedimento (função sem retorno)
mostralinha();
echo "Resultado do procedimento: ";
function saudacao($nome = "aluno") {
    echo "Olá, $nome! Bem-Vindo(a) ao PHP
    <br>";
}

// exibindo a saudacao
echo "<br>";
saudacao();
saudacao("maria");

function mostralinha() {
    echo "-------------------------------------------- <br>";
 }

mostralinha();