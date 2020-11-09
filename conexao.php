<?php
    $serverName = 'DESKTOP-LJC50H1\SQLEXPRESS';
    $connectionInfo = array("Database"=>"PI_EAGLE", "UID"=>"sa", "PWd"=>"123");
    $conn = sqlsrv_connect($serverName, $connectionInfo);

    if($serverName){
        echo "Conectado";
    }else{
        echo "Falha";
    }
