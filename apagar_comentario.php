<?php

require_once "config.php";

  $id = preg_replace('/\D/', '', $_GET['id']);

if ( $objBanco->exec("DELETE FROM COMENTARIO WHERE id = $id") !== false ) {
	$_SESSION['admin'] = true;
	header("Location: admin.php");

} else {

	echo "não deu";
}