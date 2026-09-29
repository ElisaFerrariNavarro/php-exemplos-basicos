<!-- Digite sua solução para o desafio (AQUI) -->
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
 </head>
 <body>
        <form method="post">
        <label for="nome">Nome do produto:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="preco">Preço:</label><br>
        <input type="number" id="preco" name"preco" required><br><br>



        <button type="submit">Cadastrar Preço</button>
        

        </form>   

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Recebe os valores enviados pelo formulário
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        // Conecta ao banco de dados
        $servername = "localhost";
        $username = "root";
        $password = "Senai@118";
        $dbname = "exercicio";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verifica a conexõa
        if ($conn->connect_error) {
            die("Falha na conexão: " . $conn->connect_error);
        }

            // Insere o registro no banco de dados
            $sql = "INSERT INTO clientes (nome, preco) VALUES ('$nome', '$preco')";

            if ($conn->query($sql) === TRUE) {
                echo "<p style='color: green;'>Preço cadastrado com sucesso!</p>";
            } else {
                echo "<p style='color: red;'>Erro ao cadastrar: " . $conn->error . "</p>";
            }
                // Fecha a conexão
                $conn->close();
            
        }
        ?>


 </body>
 </html>