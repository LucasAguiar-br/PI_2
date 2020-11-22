<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$connect="sqlsrv:Server=DESKTOP-LJC50H1\SQLEXPRESS;Database=PI_EAGLE";
            $user="sa";
            $pass="123";

            $cnx= new PDO($connect, $user, $pass);

    if($connect){
        echo "Conectado";
    }else{
        echo "Falha";
    }
?>