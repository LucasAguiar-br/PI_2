<?php
    require_once 'model.php';

    $model = new Model();

    $model->email=$_POST['email'];
    $model->senha=$_POST['senha'];

    $filaControler=$model->logar();


    if($filaControler>0){
        echo "<script>alert('Bem Vindo!');</script>";
        header("location:index.html");
    }
    else{
        echo "<h1>Dados inválidos</h1>";

        header("refresh:2;url=http://localhost/PI_2/login.html");
    }
 ?>