<?php

if($_SERVER['REQUEST_METHOD']=='POST') {
    //recebe senha
    $senha = $_POST['senha'];

    if($senha =='12345')  {
        //redireciona para página 
        header("location: 4b_bem_vindo.php");
        exit();
    } else {
        $erro = "Senha incorreta. Tente novamente";

    }
}
?>

<!DOCTYPE html>
<html lang = "pt-br"> 
<head>
    <meta charset="UTF-8">
    <tittle>Página de login</tittle>
</head>
<body>
    <h2>Digite a senha</h2>
    <form action="" method="post">
        <label for="">Senha:</label>
        <input type="password" name="senha" required><br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>