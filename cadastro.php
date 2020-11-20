<!DOCTYPE html>
<?php
include("conexao.php");

    if (isset($_POST['Criar'])) {
      $usuario = $_POST['nome'];
      $email = $_POST['email'];
      $senha = $_POST['senha'];

      $inserir = "INSERT INTO CADASTRO(NOME, EMAIL, SENHA) VALUES('$usuario', '$email', '$senha')";

      $executar = sqlsrv_query($conn, $inserir);

      if ($executar) {
        echo "<h3>Usuário criado</h3>";
      }
    }



    ?>
