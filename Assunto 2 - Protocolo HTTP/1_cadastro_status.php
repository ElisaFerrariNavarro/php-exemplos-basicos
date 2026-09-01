<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro - status Codes</title>
</head>
<body>
    <h1>Cadastro de alunos (com Status Codes)</h1>

    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br><br>

        <label for="idade">idade</label>
        <input type="text" name="idade" required><br><br>

        <button type="submit">Enviar</button>
    </form>

    <br>

    <?php
    // $_SERVER é uma varia´vel superglobal do PHP que contém várias informações sobre requisições feitas ao servidor. Neste caso verifica se o método utilizado foi POST e se verdade captura as informações (Nome e idade)
    if ($_SERVER('REQUEST_METHOD') == 'POST') {

    // Pega os valores digitados pelo aluno no formulário
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    // Tratativa dos erros por "Status Code"

    // Status 400: o aluno esqueceu de preencher algum campo
    if ($nome == '' || $idade == ''){
        http_response_code(400);
        echo "<h2>Status 400 - Faltou nome ou idade </h2>";

        // Status 400: Idade foi preenchida, mas não é um número
    } elseif (!ctype_digit(strval($idade))) {
        http_response_code(400);
        echo "<h2>Status 400 - Idade precisa ser número </h2>";

        // Resposta para quando tudo foi bem (Cadastro feito com sucesso)
    } else {
        http_response_code(201);
        echo "<h2>Status 201 - Criado: $nome, $idade anos </h2>";
    }

    } else {
        // Status 200: aluno só entrou na página, ainda não enviou nada
        http_response_code(200);
        echo "<p>Preencha o formulário acima e envie </p>";
    }

    ?>



</body>
</html>