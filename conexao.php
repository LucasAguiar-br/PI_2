<?php
    $serverName = 'localhost';
    $connectionInfo = array("Database"=>"PI_EAGLE", "UID"=>"sa", "PWd"=>"123");
    $con = sqlsrv_connect($serverName, $connectionInfo);

    if($serverName){
        echo "Conectado";
    }else{
        echo "Falha";
    }
