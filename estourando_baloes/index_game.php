<?php
	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
?>	

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Estourando balões</title>

		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<link rel="stylesheet" type="text/css" href="estilo_jogo.css">

	</head>

	<body>
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
					<li><a href="inscrevase_jogo.php">Inscrever-se</a></li>
					<li class="<?= $erro == 1 ? 'open' : ''?>">
					<a id="entrar" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Entrar</a>
						<ul class="dropdown-menu" aria-labelledby="entrar"> 
						<div class="col-md-12">
								<h3>Você possui uma conta?</h3>
								<br />
								<form method="post" action="validar_acesso_balao.php" id="formLogin">
									<div class="form-group">
										<input type="text" class="form-control" id="campo_usuario" name="usuario" placeholder="Usuário" />
									</div>
									
									<div class="form-group">
										<input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Senha" />
									</div>
									
									<button type="buttom" class="btn btn-primary" id="btn_login">Entrar</button>

									<br /><br />
									
								</form>

								<?php
								if($erro == 1){
									echo "<font color='#FF0000'>Dados inválidos, falha no login.</font>";
								}
								?>
							</div>
						</ul>
	            	</li>
				</ul>
			</div>
			</div> <!-- container -->
		</nav> <!-- navbar -->

		<div class="col-md-6 margin">
			<img src="imagens/cenario.png"/>
		</div>

		<div class="col-md-5 margin" id="text_pg_inicial">
			Aproveite bem seu joguinho.</br>Aja com inteligência !!!
		</div>

	<script lang="javascript" src="funcoes_baloes.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	</body>

	
</html>