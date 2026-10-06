<!-- Passar id via URL -->
<!-- http://localhost/php-basicos/13_exclusao.php?id=5-->

<?php
$servername = "Localhost";
$username = "root";
$password = "Senai@188";
$dbname = "exercicio";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Verifica se o ID foi passado via URL para exclusão
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    
    $sql = "DELETE FROM clientes WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Cliente excluído com sucesso.";
    } else {
        echo "Erro ao excluir cliente: " . $conn->error;
    }
}

// Fecha a conexão
$conn->close();

?>
