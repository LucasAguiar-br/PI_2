<!DOCTYPE html>
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
          <li><a href="review.php">Review</a></li>
          <li><a href="sobre.html">Sobre nós</a></li>
          <li><a href="login.html">Login</a></li>
          <li><a href="cadastro.php">Cadastre-se</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <main>
    <form method="POST">
      <h2>Cadastre-se <img src="imagens/logo.png" class="imagem" alt="Logo da Eagle Games" /></h2>
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
          <input type="password" name="confSenha" id="senha" required placeholder="Confirme sua senha">
        </div>>
        <div class="formulario">
          <input type="submit" name="Criar" value="Criar" class="enviar">
        </div>

      </fieldset>

    </form>
  </main>
  
  <footer>
    <p class="footer"> © 2020 Eagle Games Corporation <img class="icon2" src="imagens/logo.png" alt="Logo da Eagle Games" ></p>
  </footer>

</body>

</html>

<?php
if (isset($_POST['nome'])) {
  $nome = htmlentities(addslashes($_POST['nome']));
  $email = htmlentities(addslashes($_POST['email']));
  $senha = htmlentities(addslashes($_POST['senha']));
  $confSenha = htmlentities(addslashes($_POST['confSenha']));

  if (!empty($nome) && !empty($email) && !empty($senha) && !empty($confSenha)) {
    if ($senha === $confSenha) {
      require_once 'Classes/usuarios.php';
      $us = new Usuario("sqlsrv:Server=DESKTOP-LJC50H1\SQLEXPRESS;Database=PI_EAGLE", "sa", "123");
      if ($us->cadastrar($nome, $email, $senha)) {
        echo "<script>alert('Usuário cadastrado!')</script>";
        header("location:index.html");
      } else {
        echo "<script>alert('Email já cadastrado!')</script>";
      }
    } else {
      echo "<script>alert('Senhas não são iguais!')</script>";
    }
    }
    
}
?>