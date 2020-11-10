<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$serverName = 'DESKTOP-LJC50H1\SQLEXPRESS';
    $connectionInfo = array("Database"=>"PI_EAGLE", "UID"=>"sa", "PWd"=>"123");
    $conn = sqlsrv_connect($serverName, $connectionInfo);

    if($serverName){
        echo "Conectado";
    }else{
        echo "Falha";
    }
?>