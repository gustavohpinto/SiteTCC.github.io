
<?php
    $host ="localhost";
    $usuario ="id16934039_beesiness";
    $senha ="{<\JaGy<V9<uAJhg";
    $banco="id16934039_bancodedados";

    $conexao = new MySQLi("$host","$usuario","$senha","$banco");


    if($conexao -> connect_error){
        echo "Erro de Conexão!!!";
    }else {
        // [echo "Sucesso";
    }



?>