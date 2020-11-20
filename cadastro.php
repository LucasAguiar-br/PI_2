<!DOCTYPE html>
<?php
include("conexao2.php");
?>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">

  <title>Eagle Games</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style_form.css">
  <link rel="shortcut icon" href="imagens/logo.png" />
</head>

<body class="corpo">

  <header>
    <div class="caixa">
      <nav>
        <ul>
          <li><a href="index.html"><img src="imagens/logo.png" alt="Logo da Eagle Games"></a></li>
          <li><a href="index.html">Home</a></li>
          <li><a href="review.html">Review</a></li>
          <li><a href="sobre.html">Sobre nós</a></li>
          <li><a href="login.html">Login</a></li>
          <li><a href="cadastro.php">Cadastre-se</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <main>
    <form action="cadastro.php" method="POST">
    <h2>Cadastre-se <img src="imagens/logo.png"  class="imagem" alt="Logo da Eagle Games"/></h2>
      <fieldset>
        <div class="formulario">
          <img src=imagens/profile_user_icon.png class="icon">
          <input type="text" name="nome" id="nome" required placeholder="Nome completo">
        </div>
        <div class="formulario">
          <img src=imagens/icon3.png class="icon">
          <input type="email" name="email" id="email" required placeholder="seuemail@dominio.com">
        </div>
        <div class="formulario">
          <img src=imagens/icon2.png class="icon">
          <input type="password" name="senha" id="senha" required placeholder="digite sua senha">
        </div>
        <div class="formulario">
          <img src=imagens/icon2.png class="icon">
          <input type="password" name="senha" id="senha" required placeholder="Confirme sua senha">
        </div>
        <div class="formulario">
          <img src=imagens/icon4.png class="icon">
          <input name="avatar" id="avatar" type="url" placeholder="Link da sua foto">
        </div>
        <div class="checkbox">
          <label><input type="checkbox" checked>Gostaria de receber nossas novidades por email?</label>
        </div>
        <div class="formulario">
          <input type="submit" name="Criar" value="Criar" class="enviar">
        </div>

      </fieldset>

    </form>
    <?php
    if (isset($_POST['Criar'])) {
      $usuario = addslashes($_POST['nome']);
      $email = addslashes($_POST['email']);
      $senha = md5(addslashes($_POST['senha']));

      $inserir = "INSERT INTO CADASTRO(NOME, EMAIL, SENHA) VALUES('$usuario', '$email', '$senha')";

      $executar = sqlsrv_query($conn, $inserir);

      if ($executar) {
        echo "<script>alert('Usuario criado!')</script>";


        header("refresh:0;url=http://localhost/PI_2/index.html");
      }else{
        echo "<script>alert('Erro ao criar! Verificar dados!')</script>";

      }
    }



    ?>


  </main>
  <footer>

  </footer>

</body>

</html>