<?php

$idade = 19;
$temDocumento = true;

if ($idade >+18 && $temDocumento) {
        echo "Pode dirigir.";

} else{
    echo "Não pode dirigir.";
}

echo "----------------------";

$feriado = false;
$fimDeSemana = true;

if ($feriado || $fimDeSemana) {
        echo "\n Hoje não tem aula.";

} else{
    echo "\n Não é feriado.";
}

