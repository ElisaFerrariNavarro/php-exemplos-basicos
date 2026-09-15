<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuário</title>
</head>
<body>
    <!-- Formulário -->
     <form method="post" action="">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" required>

    <form method="post" action="">
        <label for="senha">Senha: </label>
        <input type="password" name="senha" required>

<!-- Botão de cadastro -->
        <button type="submit">Cadastrar</button>

 
     </form>


     <!-- gravar as info -->
      <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];


//fopen significa "file open" e a letra a significa acrescentar
        $arquivo = fopen('usuarios.txt', 'a');

        $linha = $nome . ';' . $senha . "\n";

        fwrite($arquivo, $linha);

        fclose($arquivo);


    echo "<p>Usuário cadastrado com sucesso!</p>";


    }


?>
</body>
</html>