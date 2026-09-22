<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de usuário</title>
</head>
<body>
    <form method="post" action="">

    <!-- Campo pra nome -->
<label for="nome">Nome:</label>
<input type="text" name="nome" required>

    <!-- Campo para senha -->
<label for="senha">Senha:</label>
<input type="password" name="senha" required>

    <!-- Botão para envio -->
<button type="submit">Entrar</button>

    </form>

    <?php

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];


    $arquivo = fopen('../Assunto_4/usuarios.txt', 'r');
    $login_sucesso = false;

//le as linhas do arquivo
    while (($linha = fgets($arquivo)) !==false) {
    //divide a linha pelo determinador "neste caso o ; "
    list($usuario_arquivo, $senha_arquivo) = explode(',', trim($linha));

    //verifica se o nome e senha correspondem no arquivo


    if ($nome == $usuario_arquivo && $senha == $senha_arquivo) {
        $login_sucesso = true;
        break;
        }
     }

fclose($arquivo);

if($login_sucesso) {
    echo "<p style='color: darkgreen;'>Login realizado com sucesso!<br> Bem-Vindo $nome</p>";


}else {
    echo "<p style='color: red;'>Usuário ou senha incorreta.</p>";
}
  }
  


?>
</body>
</html>

