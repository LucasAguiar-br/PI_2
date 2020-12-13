<?php
session_start();

require_once "config.php";

//Consulta para listar meus contatos
$tabela = array();

$lista_sql = 'SELECT * FROM COMENTARIO ORDER BY DATA';

foreach ($objBanco->query($lista_sql) as $registro) {
        $tabela[$registro['ID']] = [
        'comentario' => $registro['COMENTARIO'],
        'nome' => $registro['NOME'],
        'data' => $registro['DATA']
        
    ];
}

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
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="comentario.css">
    <!-- JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>

</head>

<body class="corpo">
    <header>
        <div class="caixa">
            <nav>
                <ul>
                    
                    <?php
 if (isset($_SESSION['admin'])) {
    echo"<li><a href='sair.php'>Sair</a></li>";
	
}

?>
                </ul>
            </nav>
        </div>

    </header>

    <section id="post1">

        <div id="topo5">
            <div id='p3'>ID</div>
            <div id='p4'>Nome</div>
            <div id='p5'>Comentario</div>
            <div id='p6'>Data</div>
            <div id='p7'>apagar</div>
        </div>
        <?php
            if (count($tabela) > 0) { // Se tiver dado na tabela

                foreach ($tabela as $id => $reg) {

                    echo "	<div id='topo6'>
                                    <div id='p3'>$id</div>	
                                    <div id='p4'>{$reg['nome']}</div>
                                    <div id='p5'>{$reg['comentario']}</div>
                                    <div id='p6'>{$reg['data']}</div>
                                    <div id='p7'><a href='apagar_comentario.php?id=$id'>Apagar</a></div>
                            </div>	
									";
                }
            } 
            ?>