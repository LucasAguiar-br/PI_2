<?php
    global $pdo;
    //constrution 
    class Usuario{
        
        private $pdo;

        public function __construct($connect, $user, $pass)
        {
            $connect="sqlsrv:Server=DESKTOP-LJC50H1\SQLEXPRESS;Database=PI_EAGLE";
            $user="sa";
            $pass="123";

            $cmd = new PDO($connect, $user, $pass);
            }

            

    

     //cadastrar

    
    public function cadastrar($nome, $email, $senha){

        $connect="sqlsrv:Server=DESKTOP-LJC50H1\SQLEXPRESS;Database=PI_EAGLE";
        $user="sa";
        $pass="123";
        $cmd = new PDO($connect, $user, $pass);


        $consu = $cmd->prepare("SELECT ID FROM CADASTRO WHERE EMAIL=:e");
        $consu->bindValue(":e", $email);
        $consu->execute();
        if($consu->rowCount()>0){
            return false;
        }else{
            $consu=$cmd->prepare("INSERT INTO CADASTRO(NOME, EMAIL, SENHA) VALUES (:n, :e, :s)");
            $consu->bindValue(":n", $nome);
            $consu->bindValue(":e", $email);
            $consu->bindValue(":s", $senha);
            $consu->execute();
            return true;
        }
    }

    public function buscaUser($id){
        $cmd=$this->pdo->prepare("SELECT * FROM CADASTRO WHERE ID=:id");
        $cmd->binValue(":id",$id);
        $cmd->execute();
        $dados = $cmd->fetch();
        return $dados;
    }
}
?>

