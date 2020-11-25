<?php
  session_start();
  require_once 'Classes/comentarios.php';
  $c = new Comentario("sqlsrv:Server=DESKTOP-LJC50H1\SQLEXPRESS;Database=PI_EAGLE", "sa", "123");
  $comments = $c->buscarComentario();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Css-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="review.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="comentario.css">
  <!-- JS-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>

</head>

<body class="corpo">
  <header>
			<div class="caixa">     
				<nav>
					<ul>
            <li><a href="index.html"><img src="imagens/logo.png" alt="Logo da Eagle Games" ></a></li>
						<li><a href="index.html">Home</a></li>
						<li><a href="review.php">Review</a></li>
            <li><a href="sobre.html">Sobre nós</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="cadastro.php">Cadastre-se</a></li>
					</ul>
				</nav>
    </div>
    <div>
      <div class="embed-responsive embed-responsive-16by9" id="player">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/iqysmS4lxwQ" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
      </div>
    </div>
  </header>
  <main>
    <div id="descrição">
      <div class="container" id="paragrafo1">
        <div class="row">
          <div class="col-sm-12 col-lg-6 ">
            <img src="imagens/ghostcapa.png" class="img-responsive" alt="Imagem Responsiva" id="img1">
          </div>
          <div class="col-sm-12  col-lg-6 text-wrap" id="texto1">
            <h2>JIN DEVE ABANDONAR AS TRADIÇÕES
              E SE TORNAR O FANTASMA DE TSUSHIMA</h2>
            <span> Aventure-se além dos campos de batalha e
              vivencie o Japão feudal de uma forma nunca antes vista.
              Neste jogo de ação e aventura em mundo aberto,
              trilhe por paisagens vastas e terrenos amplos,
              encontrando personagens riquíssimos, descobrindo
              monumentos antigos e revelando toda a beleza oculta de
              Tsushima. Explore regiões meticulosamente criadas
              que mostram toda a diversidade dessa enorme ilha.
              De campos ondulantes e santuários tranquilos
              a florestas ancestrais, vilas e montanhas com paisagens
              de brilhar os olhos. Encontre paz na quietude
              serena da natureza e alívio nos momentos partilhados
              com as pessoas que ajuda ao longo de sua jornada.</span>
          </div>
        </div>
      </div>
    </div>
    <div class="container" id="paragrafo2">
      <div class="row">
        <div class="col-sm-12 col-lg-6   text-wrap" id="texto2">
          <h2> A ASCENSÃO DO FANTASMA</h2>
          <span> Jin foi criado e treinado segundo os caminhos dos samurais.
            Quando os mongóis aniquilam os exércitos desses guerreiros,
            seu mundo entra em colapso. Ele se depara com a decisão
            mais difícil de sua vida: honrar as tradições e os costumes de sua criação
            como samurai, travando uma luta que não pode vencer,
            ou desviar desse caminho para proteger a ilha e seu povo a qualquer custo.
            Em sua jornada para recuperar Tsushima, Jin deve buscar os conselhos
            e o apoio de velhos amigos, além de novos e improváveis aliados.
            Ele precisa se desapegar das tradições para se tornar
            um novo tipo de guerreiro e proteger o que restou de seu lar,
            custe o que custar.</span>
        </div>
        <div class="col-sm-12 col-lg-6 ">
          <img src="imagens/ghost22.png" class="img-responsive" alt="Imagem Responsiva" id="img2">
        </div>
      </div>
    </div>
    <div id="paragrafo3">
      <div class="row m-auto">
        <div class="col-sm-12 col-lg-4  text-wrap" id="pontos">
          <div id="pros">
            <h3>Prós</h3>
            <span>expansivo e desafiador </span>
            <span>Variedade de armas</span>
            <span>Atividades extras</span>
            <span>Cenários bem construídos</span>
            <span>Trilha sonora imersiva</span>
            <span>Tempo de loading surreal</span>

          </div>
          <div id="contras">
            <h3 id="tituloContras">Contras</h3>
            <span>ação de missões</span>
            <span>Gráficos de personagens</span>
            <span>Narrativa esquecível</span>
            <span>Problemas com câmera e parkour</span>

          </div>
        </div>
        <div class="col-sm-12 col-lg-4 ">
          <img src="imagens/ghost3.png" class="img-responsive" alt="Imagem Responsiva" id="img3">
        </div>
      </div>

    </div>

    <h2>Deixa seu comentario</h2>
    <form method="POST">
      <textarea name="texto" placeholder="Deixa aqui seu comentário"></textarea>
      <input type="submit" value="Publicar">
    </form>

        
    <?php
      if(count($comments) >0){
        foreach ($comments as $v){
      ?>  <div class="area-comentario">
          <h3><?php echo $v['NOME_PESSOA'] ?></h3>
          <h4>
            <?php
                $data = new dateTime($v['DIA']);
                echo $data->format('d/m/Y');
                echo " - ";
                echo $v['HORARIO'];
            ?>
          </h4>
          <p>
            <?php
              echo $v['COMENTARIO'];
            ?>
          </p>
          </div>
          
       <?php }
      }else{
        echo "Sem comentarios";
      }
      ?>

      <?php
        if(isset($_POST['texto'])){
          $texto = addslashes($_POST['texto']);
          $c->inserirComentario($_SESSION['id'], $texto);

          // header("location: review.php");
        }
      ?>
    

  </main>
  <footer>
    <p class="footer"> © 2020 Eagle Games Corporation <img class="icon2" src="imagens/logo.png" alt="Logo da Eagle Games" ></p>
  </footer>
</body>

</html>