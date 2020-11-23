<?php

date_default_timezone_set('America/Sao_Paulo');
    global $pdo;
    //constrution 
    class Comentario{
        
        private $pdo;

        public function __construct($connect, $user, $pass)
        {
            $connect="sqlsrv:Server=DESKTOP-LJC50H1\SQLEXPRESS;Database=PI_EAGLE";
            $user="sa";
            $pass="123";

            $cmd = new PDO($connect, $user, $pass);
            }


        public function buscarComentario(){

        $connect="sqlsrv:Server=DESKTOP-LJC50H1\SQLEXPRESS;Database=PI_EAGLE";
        $user="sa";
        $pass="123";
        $cmd = new PDO($connect, $user, $pass);
        
            $consul = $cmd->prepare("SELECT *, (SELECT NOME 
                                        FROM CADASTRO
                                        WHERE ID = ID_USUARIO) AS NOME_PESSOA 
                                        FROM COMENTARIO ORDER BY DIA DESC");
            $consul->execute();
            $dados = $consul->fetchAll(PDO::FETCH_ASSOC);
            return $dados;
        }

        public function inserirComentario($id_usuario, $comentario){
            $connect="sqlsrv:Server=DESKTOP-LJC50H1\SQLEXPRESS;Database=PI_EAGLE";
            $user="sa";
            $pass="123";
            $cmd = new PDO($connect, $user, $pass);

            $consul = $cmd->prepare("INSERT INTO COMENTARIO (COMENTARIO, DIA, HORARIO, ID_USUARIO) VALUES (:c, :d, :h, :pk)");
            $consul->bindValue(":c",$comentario);
            $consul->bindValue(":d",date('Y-m-d'));
            $consul->bindValue(":h",date('H:i'));
            $consul->bindValue(":pk",$id_usuario);
            $consul->execute();
        }
        }



?>