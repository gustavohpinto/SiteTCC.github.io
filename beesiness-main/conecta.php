
<?php
    $host ="localhost";
    $usuario ="root";
    $senha ="";
    $banco="tcc";

    $conexao = new MySQLi("$host","$usuario","$senha","$banco");


    if($conexao -> connect_error){
        echo "Erro de Conexão!!!";
    }else {
        // [echo "Sucesso";
    }



?>