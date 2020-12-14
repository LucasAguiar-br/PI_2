<?php 

session_start();

require_once "config.php";

$senha1= $_POST['senha'];
$email= $_POST['email'];

$r = $objBanco->query("SELECT SENHA, NOME FROM CADASTRO WHERE EMAIL = '$email'");
$reg = $r->fetch(PDO::FETCH_ASSOC);
$senha = $reg['SENHA'];



if (password_verify( $senha1, $senha)){
  $_SESSION['email'] = $email;
  $_SESSION['nome'] = $reg['NOME'];
 header("Location: review.php");
  
die();
}
if ($email=='admin@admin.com' && $senha1=='000') {
    $_SESSION['admin'] = true;
    header("Location: admin.php");

}
else{
header("Location: login.html");
}

