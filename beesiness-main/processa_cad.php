<?php
//Processa

//SESSION PSEUDOVARIAVEL(CRUD)
session_start();  //Campos para validação - > Chaves Primarias, Emails, Id,

include 'restrita/conecta.php';
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['pass'];


$consulta = $conexao -> prepare(
    "INSERT INTO usuario (nome, email, senha) VALUES('$nome', '$email','$senha' )"
);
    try {
        $consulta -> execute();
        
        header('Location: login.html');
    
    } catch (\Throwable $th) {
        Echo"Erro";
    }

?>