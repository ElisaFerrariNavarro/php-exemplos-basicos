<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com validação</title>

    <style>
      body {
        background-color: #fffdf1;
      }
            input[type="text"], input[type="email"], textarea {
     background-color: #f6f3e2; 
     border: 2px solid #88867c; 
     padding: 10px;             
     border-radius: 4px;
            }
    </style>
</head>
<body>
    <form action="" method="post">
        <!-- Campo de nome, email e mensagem -->

    <label for="nome">Nome</label>
    <input type="text" name="nome" required> <br><br>

    <label for="email">Email</label>
    <input type="email" name="email" required> <br><br>
    
    <label for="mesagem">Mensagem</label> <br><br>
    <textarea name="mensagem" required></textarea> <br><br>

    <button type="submit">Enviar</button
    </form>

    <!-- parte lógica -->
     <?php
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //recebe os dados
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];

        //Validação dos campos (Se VAZIOS e se e-mail é VÁLIDO)
        if(!empty($nome) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($mensagem) ) {
            echo "<p style='color: darkgreen;'>Feedback enviado com sucesso!</p>";
        } else {
            echo "<p style='color: red;'>Preencha todos os campos corretamente!</p>";
        }
     }
     ?>
</body>
</html>