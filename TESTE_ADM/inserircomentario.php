<?php

session_start();

require_once "config.php";

$email = $_SESSION['email'];
$data = date("d/m/Y");
$nome = $_SESSION['nome'];

$r = $objBanco->query("SELECT ID FROM CADASTRO WHERE EMAIL = '$email'");
$reg = $r->fetch(PDO::FETCH_ASSOC);
$id_usuario = $reg['ID'];



$objComentario = $objBanco->prepare('	INSERT INTO COMENTARIO ( COMENTARIO, DATA , ID_USUARIO, NOME)VALUES ( :comentario, :data, :id_usuario,:nome)');

$objComentario->bindParam(':comentario', $_POST['comentario']);
$objComentario->bindParam(':data', $data);
$objComentario->bindParam(':id_usuario', $id_usuario);
$objComentario->bindParam(':nome', $nome);			




if ( $objComentario->execute() ) {
    header("Location: review.php");

} else {
    
	echo' :-( deu erro, tente novamente! ';
}