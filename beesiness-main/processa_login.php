
<?php
session_start(); 
include 'restrita/conecta.php';
$email = $_POST['email'];
$senha = $_POST['pass'];


echo  "<script>alert('$email', '$senha');</script>";
$consulta = "SELECT * FROM usuario 
WHERE email ='$email' AND senha ='$senha'";

$resultado = $conexao -> query($consulta); //query significa consulta. Cosulta realiza a Consulta da variavél $consulta
$registros = $resultado -> num_rows;

// Para a variavel de sessão, vamos pegar o Id, Email e Nome. Além do tipo de Usuário
//Vetor Associativo
$registro_usuarios = mysqli_fetch_assoc($resultado);
// print_r($registro_usuarios);

if ($registros == 1) {
    $_SESSION['id'] = $registro_usuarios['codUsuario'];
    $_SESSION['nome'] = $registro_usuarios['nome'];
    $_SESSION['email'] = $registro_usuarios['email'];
    // $_SESSION['nivel'] = $registro_usuarios['nivel'];

    //Variáveis de Sessão, são do tipo Global
   
    header('Location: dash.php'); // É o dashboard
} else{
    $_SESSION['email'] = $email;
    $_SESSION['senha'] =  $senha;
    unset( $_SESSION['email'],$_SESSION['senha'] );
    header('Location: login.html');
}

?>