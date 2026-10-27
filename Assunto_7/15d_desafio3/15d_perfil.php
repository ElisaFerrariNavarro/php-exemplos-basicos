<?php
// Página restrita.
session_start();
// Verifica se o usuário está logado.
if (!isset($_SESSION['usuario'])) {
    header("Location: 15a_sistema.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3 - Perfil</title>

    <style>

        :root {
            --vermelho: #ff1900;
            --laranja: #ff7700;
            --amarelo: #f3ff4d;
            --verde: #04f62c;
            --azul: #1a90ff;

            --impact: impact;
            --monospace: monospace;

        }
        body {
            background-color: var(--<?php echo $_SESSION['cor']; ?>);

            font: 1em var(--<?php echo $_SESSION['fonte']; ?>);

        }
    </style>


</head>
<body>
    
    <h2>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h2>
    <p>Para sair da sua conta, clique em Logout ╰(*°▽°*)╯</p>

   
    <a href="15d_login.php">Logout</a>




</body>
</html>