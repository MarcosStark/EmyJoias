<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        header('Location: inscrevase_jogo.php?erro=1');
    }

?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Estourando balões</title>
		
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<link rel="stylesheet" type="text/css" href="estilo_jogo.css">

		<script src="funcoes_baloes.js"></script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 
	</head>

	<body>
		<!-- bottom start -->
		<div class="row"  id="principal">
			<div class="col-md-2 margin">
						<strong>Nível:</strong>
						<select id="dificultity">
							<option value="1">Fácil</option>
							<option value="2">Normal</option>
							<option value="3">Difícil</option>				
						</select>

						<button type="button" id="btn_iniciar" onclick="requisicao('jogo_balao.php', 'principal')"><img src="imagens/iniciar.png"/></button>
			</div>

			<!-- fim bottom start -->

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

				<div class="col-md-5 margin" id="cenario_level_balao">
					<img src="imagens/cenario.png"/>
				</div>

				<div class="col-md-3 margin" id="text_pg_inicial">
					Aproveite bem seu joguinho.</br>Haja com inteligência !!!
				</div>
		</div>

			<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10"></div>
			<div class="col-md-1"></div>

	</body>


</html>