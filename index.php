<?php
/*
$banco_de_dados = new mysqli("localhost", "root", "", "album" );
$sql = "SELECT * from imagem";


$resultado = $banco_de_dados->query($sql);

while ($linha = mysqli_fetch_array($resultado)){
    $album = $linha;
}

*/

if(isset($_POST['acao'])){
    $arquivo = $_FILES['file'];

    $arquivoNovo = explode('.', $arquivo['name']);

    if($arquivoNovo[sizeof($arquivoNovo)-1] != 'jpg'){
        die('Você não pode fazer upload deste tipo de arquivos');
    }else {
        echo 'Upload foi feito com sucesso';
        move_uploaded_file($arquivo['tmp_name'], 'uploads/'. $arquivo['name']);
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro Upload</title>
</head>
<body>
    <?php
        // var_dump($album);
    ?>
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" />
        <input type="submit" name="acao" value="Enviar"/>
    </form>
    
</body>
</html>
