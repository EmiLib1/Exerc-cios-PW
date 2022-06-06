<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="estilo3.css">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Processador de Dados</title>
</head>
<body>
<?php


        $nome =  $_POST["nome"]; 
        $logradouro = $_POST["logradouro"];
        $numero = $_POST["numero"];
        $CEP = $_POST["CEP"];
        $complemento = $_POST["complemento"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["estado"];


        $tmp = $_FILES["arq"]["tmp_name"] ;
     
        $arq =  "Imagem/". $_FILES["arq"]["name"];

        if(move_uploaded_file( $tmp, $arq )){
            echo "<p>Arquivo de imagem enviado com sucesso para o servidor!</p>";
        }
        
    echo "<p> Olá, " . $nome .". Esses foram os dados enviados: </p>";

    echo "<p> Logradouro: " . $logradouro . "</p>";

    echo "<p> Número da Residência: " . $numero . "</p>";

    echo "<p> CEP: " . $CEP . "</p>";

    echo "<p> Complemento: " . $complemento . "</p>";

    echo "<p> Bairro: " . $bairro . "</p>";

    echo "<p> Cidade: " . $cidade . "</p>";
    
    echo "<p> Estado: " . $estado . "</p>";



?>
</body>
</html>