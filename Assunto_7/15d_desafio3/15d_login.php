<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3 - Login </title>
    <style> 

    body {
        background-color: #3e4fa2;
        
    }

    label {
        color: #fff;
    }

    
    </style>
</head>
<body>
    
        <form action="" method="post">


        <label for="usuario">Usuário</label><br>
        <input type="text" id="usuario" name="usuario" required><br><br>

        <label for="senha">Senha</label><br>
        <input type="password" id="senha" name="senha" required><br><br>

          <label for="cor">Cor de fundo</label><br>
        <select  name="cor"> 
            <option value="">Selecione uma cor</option>
            <option value="vermelho">Vermelho</option>
            <option value="laranja">Laranja</option>
            <option value="amarelo">Amarelo</option>
            <option value="verde">Verde</option>
            <option value="azul">Azul</option>
</select><br><br>

             <label for="fonte">Fonte da página</label><br>
        <select  name="fonte"> 
            <option value="">Selecione uma fonte</option>
            <option value="impact">impact</option>
            <option value="monospace">Monospace</option>
      

        </select><br><br>
        
        <button type="submit">Enviar</button>
        </form>


  <?php
    session_start();
    // Verifica se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recebe os valores enviados pelo formulário
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $cor = $_POST['cor'];
        $fonte = $_POST['fonte'];
        // Conecta ao banco de dados
        $servername = "localhost";
        $username = "root";
        $password = "Senai@118";
        $dbname = "exercicio";
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Verifica a conexão
        if ($conn->connect_error) {
            die("Falha na conexão: " . $conn->connect_error);
        }
        // Consulta o usuário no BD
        $sql = "SELECT * FROM usuarios
                WHERE usuario = '$usuario' AND senha = '$senha'";
        $result = $conn->query($sql);
        // Verifica se encontrou o usuário
        if ($result->num_rows > 0) {
            $_SESSION['fonte'] = $fonte;
            $_SESSION['cor'] = $cor;
            $_SESSION['usuario'] = $usuario;
            header("Location: 15d_perfil.php");
            exit();
            echo "<script>
                    window.location.href = '15d_perfil.php';
                  </script>";
        } else {
            echo "<p style='color: red;'>Usuário ou senha incorretos!</p>";
        }
        // Fecha a conexão
        $conn->close();
    }
    ?>


</body>
</html>