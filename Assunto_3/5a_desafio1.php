<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuário</title>
    <style>
        h1 {
            font-family:'Courier New', Courier, monospace
        }
        h1 {
            color: darkblue
        }
        body {
            background-image: url(https://t4.ftcdn.net/jpg/01/86/72/07/360_F_186720710_dfVgpEniF62Ord3GqdwThUZMzNZ48LLc.jpg);
            background-size: cover;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        input[type="text"], input[type="number"] {
  background-color: #6ca4db; 
  border: 2px solid #4385c6; 
  padding: 5px;             
  border-radius: 2px;        
}
    </style>
</head>
<body>
    <h1>TESTE DE MAIORIDADE (●'◡'●)</h1>
    <!-- Formulário -->
     <form method="post" action="">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" required>

    <form method="post" action="">
        <label for="senha">Ano de nascimento: </label>
        <input type="number" name="idade" required>

<!-- Botão de cadastro -->
        <button type="submit">Cadastrar</button>

 
     </form>

      <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];


//fopen significa "file open" e a letra a significa acrescentar
        $arquivo = fopen('log_acessos.txt', 'a');

        $linha = $nome . ';' . $idade . "\n";

        fwrite($arquivo, $linha);

        fclose($arquivo);

if ($idade > 2007) {
  echo "<p>Acesso negado, $nome!</p>";
} else {
    echo "<p>Acesso permitido, $nome!";
}
   


    }


?>


</body>
</html>