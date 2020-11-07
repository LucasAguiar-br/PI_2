<?php 


require_once "bd.php";

$email= $_POST['email'];
$senha= $_POST['senha'];



$statement = $objBanco->prepare("SELECT email, senha FROM cadastro WHERE senha = '$senha' AND email = '$email';");

$statement-> execute();

$count = $statement->rowCount();


if ($count==0){

    header("Location: login.html");

  die();
}else{

  header("Location: 123.php");
}

var_dump($_POST);