<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post" enctype="multipart/form-data">
    <label for="imagem">Selecione uma imagem:</label>
    <input type="file" name="imagem" accept="image/*" required><br>

    <button type="submit">Upload</button>
</form>

<?php
    $diretorio_destino = null;
    //verifica se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //caminho onde as imagens serão salvas
        $diretorio_destino = 'uploads/';
    }



    //se o caminho não existir
    if(!is_dir($diretorio_destino)) {

        mkdir($diretorio_destino, 0777, true);
    }

      if(isset($_FILES['imagem']) && $_FILES['imagem']['error'] == UPLOAD_ERR_OK) {

               $nome_arquivo = basename($_FILES['imagem']['name']);

            // Caminho completo (Exemplo: uploads/Sabrina.jpg)
            $caminho_completo = $diretorio_destino . $nome_arquivo;

            // Movendo a imagem para pasta (uploads)
            if(move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho_completo)) {
                echo "<p>Upload realizado com sucesso!</p>";
                echo "<img src='$caminho_completo' alt='Imagem enviada' style='max-width: 300px;'>";
            } else {
                echo "<p>Erro ao fazer upload do arquivo!</p>";
            } }else {
                echo "<p>Nenhum arquivo enviado/ erro de upload!</p>";
            }
        
    




?>

</body>
</html>