<?php
    class Model
    {
        var $id;
        var $email;
        var $senha;

        function __construct(){

        }

        function logar(){
            $connect="sqlsrv:Server=DESKTOP-LJC50H1\SQLEXPRESS;Database=PI_EAGLE";
            $user="sa";
            $pass="123";

            $cnx= new PDO($connect, $user, $pass);


            try{

                $consulta=$cnx->prepare("SELECT * FROM CADASTRO 
                WHERE EMAIL=:parametro1 AND SENHA=:parametro2");

                $consulta->bindValue(":parametro1", $this->email);
                $consulta->bindValue(":parametro2", $this->senha);

                $consulta->execute();

                $fila=$consulta->fetch();

                return $fila;

            }
            
            
            catch(PDOException $e){
                echo "Erro de conexão->" .$e;
            }
        }
    }
?>