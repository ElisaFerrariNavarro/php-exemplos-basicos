<?php
//cria conexão com o banco
$servername = "Localhost";
$username = "root";
$password = "Senai@188";
$dbname = "exercicio";

$conn = new mysqli($servername, $username, $password, $dbname);

//verifica a conexão
if($conn->connect_error) {
    die("Falha na conexão: " .$conn->connect_error);
}

 //Consulta para listar os clientes da tabela

$sql = "SELECT id, nome, email FROM clientes";
$result = $conn->query($sql);


//exibe os resultados
if ($result->num_rows > 0) {
    echo "<table border='1'";

    //título das colunas
    echo  "<tr>  <th>ID</th>  <th>Nome</th> <th>Email</th>  </tr>";

    //Linhas usando fetch_assoc() - Método nativo do php que retorna em linha os registros "array associativo" (ex: id, nome, email)
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    

} else {
    echo "Nenhum cliente encontrado";
}   

   // Encerra a conexão
   
$conn->close();

?>