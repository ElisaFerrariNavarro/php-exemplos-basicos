<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro - status codes</title>
</head>
<body>
    <h1>Cadastro de alunos (com status codes)</h1> <\h1>


<form method="post" action="">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" required> <br><br>

    <label for="idade">idade:</label>
    <input type="text"  name="idade" required> <br><br>

    <button type="submit"> Enviar<\button>
</form>

</body>
</html>



<?php

if ($_SERVER ['REQUEST_METHOD'] == 'post') {
    $nome = $_POST ['nome'];
    $idade  = $_POST['idade'];
}

if ($nome == '' || $idade = '') {
    http_response_code(400);
    echo "<h2>Status 400 - Faltou preencher nome ou idade!</h2>";

}


    ?>