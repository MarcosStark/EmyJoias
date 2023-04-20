<?php
    session_start();
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
			
			</div>
			<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#barra-navegacao">
				<span class="sr-only">alternar navegação</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<a href="index.php" id="img_logo"></a>

            <div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index_game.php">Página inicial</a></li>
				</ul>
			</div>

			</div> <!-- container -->
            </nav> <!-- navbar -->
            </br>
            <div class="col-md-4"></div>
            <div class="col-md-4 margin">
                <h3>Inscreva-se</h3>
                    <form method="post" action="registra_usuario_jogo.php" id="formCadastrarse">
                        <div class="form-group">
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário" required="required">
                        
                            <?php 
                                /*if($erro_usuario) {
                                    echo "<font color='#FF0000'>Usuário já existe!</font>";
                                }*/
                            ?>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="required">
                        
                            <?php
                                /*if($erro_email) {
                                    echo  "<font color='#FF0000'>Email já existe!</font>";
                                }*/
                            ?>
                        </div>
                        
                        <div class="form-group">
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="required">
                        </div>
                        
                        <button type="submit" class="btn btn-primary form-control">Inscreva-se</button>
                    </form>
            </div>
		<script lang="javascript" src="game.js"></script>
	</body>
	
</html>