<?php


$produtos = [
    ["nome" => "camiseta", "preco" => 50.00, "quantidade" => 1],
    ["nome" => "Mini Saia", "preco" => 100.00, "quantidade" => 4],
    ["nome" => "Saia Mini", "preco" => 150.00, "quantidade" => 3],
   
];
//formato de tabela
echo "<table border='1'>";
echo "<tr> <th>Nome</th>  <th>Preço</th> <th>Quantidade</th> </tr>";
 //laço

 foreach ($produtos as $produto) {
        echo "<tr>";    
        echo "<td>" . $produto['nome']. "</td>";
        echo "<td>R$" . number_format($produto['preco'], 2 , ',' , '.') . "</td>";
        echo "<td>" . $produto['quantidade']. "</td>";
        echo "<tr>";
 }

echo "</table>";

?>