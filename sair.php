<?php
session_start(); // p/ usar funções de sessão e tal - Habilita o uso da sessão


unset($_SESSION['id'],
	$_SESSION['nome'],
    $_SESSION['email']);
    
header('Location: index.html');


?>