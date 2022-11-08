<?php

    session_start();

    include_once ("../servidor.php");

    $titulo = $_POST["titulo"]; 
    $desc = $_POST["desc"];
    $valor = $_POST["valor"];
    $cod_ed = $_POST["ed"];

    $sql = " UPDATE tb_livro 
    SET cod_ed = $cod_ed, titulo_liv = '$titulo', desc_liv = '$desc', valor_liv = $valor 
    WHERE cod_liv = " . $_POST["cod_liv"]; 

    $resp = $POO->query($sql);

    if($resp = $POO->affected_rows == 1){
        echo "<script type='text/javascript'>
       
        alert('Livro alterado!');
        
        </script>";
      }

    echo "<br><a href='lista_livro.php'> Voltar </a>";
    
    $POO->close();

?>
