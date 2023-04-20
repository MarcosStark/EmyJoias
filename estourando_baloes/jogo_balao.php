<?php 


/*require_once("db_balao_class.php");

$sql = "SELECT qtd_baloes FROM jogo";

$objDb = new db();
$link = $objDb->conecta_mysql();

$tj = mysqli_query($link, $sql); 

$t_j = mysqli_fetch_array($tj);

$qtd_baloes = $t_j['qtd_baloes'];

mysqli_query($link, $sql);*/

?>


<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Estourando balões</title>
		
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<link rel="stylesheet" type="text/css" href="estilo_jogo.css">

        <script type="text/javascript" src="funcoes_baloes.js"></script>

	</head>



	<body>
     

    <div id="base" class="col-md-2">
        <div class="col-md-1"></div>
        </br> </br>
                <table border="0">
                    <tr>
                        <td class="border_menu"><img src="imagens/balao_azul_grande.png"></td>
                        <td class="border_menu">
                            <span id="baloes_inteiros"></span>
                        </td>
                    </tr>
                </table>

                </br>
                <table border="0">
                    <tr>
                        <td class="border_menu"><img src="imagens/balao_azul_grande_estourado.png"></td>
                        <td class="border_menu">
                        <span id="baloes_estourados"></span>
                        </td>
                    </tr>
                </table>

                </br>
                <table border="0" id="cro">
                    <tr>
                        <td class="border_menu" id="img_cro">
                            <div id="time_cro"></div>
                        </td>
                    </tr>
                </table>
    </div>
  
        <div id="cenario" class="col-md-6"></div>

        <!-- navbar -->
		<nav class="navbar navbar-fixed-top" id="barra">
	
    <div class="container">  <!-- container -->

    <div class="navbar-header">
    
    <button type="button" class="navbar-toggle collapsed"
            data-toggle="collapse" data-target="#barra-navegacao">
        <span class="sr-only">alternar navegação</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <a href="index_game.php" id="img_logo"></a>
    </div>

    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="index_game.php">Sair</a></li>

    </nav> <!-- navbar -->

    <div class="col-md-4 margin" id="text_pg_inicial">
        Aproveite bem seu joguinho.</br>Aja com inteligência !!!
    </div>
    
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	</body>


</html>