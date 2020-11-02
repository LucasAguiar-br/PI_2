<?php

// require_once "config.php";

// $pdoConfig = DB_DRIVE . ":". "Server=" . DB_HOST . ";";
// $pdoConfig .= "Database=".DB_NAME. ";";

// try {
//     $objBanco = new PDO($pdoConfig, DB_USER, DB_PASS);


// } catch (PDOException $objErro)  {

//     echo "SGND Indisponível:" . $objErro->getMessage();

//     exit();

// }

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$dsn = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=PI_EAGLE';
$user = 'sa';
$password = '123';



$db = new PDO($dsn, $user, $password);


// var_dump($db);

$sql = 'SELECT USUARIO, NOME FROM CADASTRO';
foreach ($db->query($sql) as $registro){
    echo "Usuario:{$registro['USUARIO']} Nome: {$registro['NOME']}<br>" . PHP_EOL;
}