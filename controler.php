<?php
    require_once 'model.php';

    $model = new Model();

    $model->email=$_POST['email'];
    $model->senha=$_POST['senha'];

    $filaControler=$model->logar();


    if($filaControler>0){
        session_start();
        $_SESSION["ID"] = $filaControler["ID"];
        echo "<script>alert('Bem vindo!')</script>";

        header("refresh:0;url=http://localhost/PI_2/index.html");


    }
    else{
        echo "<script>alert('Dados Inválidos')</script>";

        header("refresh:0;url=http://localhost/PI_2/login.html");
    }
 ?>