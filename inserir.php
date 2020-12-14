<?php

session_start();

require_once "config.php";


$senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);

$objCadastro = $objBanco->prepare('	INSERT INTO CADASTRO ( NOME, EMAIL,SENHA)VALUES ( :nome, :email, :senha)');

$objCadastro->bindParam(':nome', $_POST['nome']);			
$objCadastro->bindParam(':email', $_POST['email']);
$objCadastro->bindParam(':senha', $senha);



if ( $objCadastro->execute() ) {
    echo 'Contato gravado com sucesso!';

} else {

	echo' :-( deu erro, tente novamente! ';
}

$senha1= $_POST['senha'];
$email= $_POST['email'];
$nome= $_POST['nome'];


if(password_verify($senha1, $senha)){
	$_SESSION['email'] = $email;
	$_SESSION['nome'] = $nome;
    header("Location: review.php");
    
  die();
}else{
	header("Location: login.php");  
}
