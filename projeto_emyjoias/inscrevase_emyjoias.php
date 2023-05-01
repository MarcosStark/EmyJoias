<?php
	$erro_usuario = isset($_GET['erro_usuario']) ? $_GET['erro_usuario'] : 0;
	$erro_email = isset($_GET['erro_email']) ? $_GET['erro_email'] : 0;
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Emy Joias</title>
        <link rel="icon" href="imagens/favicon.png">

        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="estilo.css" rel="stylesheet">
    </head>

    <body>
        <nav class="navbar navbar-fixed-top navbar-inverse navbar-transparente">
            <div class="container">       
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed"
                            data-toggle="collapse" data-target="#barra-navegacao">
                        <span class="sr-only">alternar navegação</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a href="index.php" class="navbar-brand">
                        <span class="img-logo">Emy Joias</span>
                    </a>
                </div>

                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="prata.html">Prata</a></li>

                        <li class="dropdown"> 
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            Semijoias <span class="caret"></span>
                            </a> 
                            <ul class="dropdown-menu">
                                <li> <a href="feminino.html" class="btn-sexo">Feminino</a> </li>
                                <li> <a href="masculino.html">Masculino</a> </li>
                            </ul>
                        </li>

                        <li><a href="folheados.html">Folheados</a></li>
                    </ul>
                </div>    
            </div> 
        </nav> 

        <div class="margin" id="cadastro">
            <h3>Cadastrar-se</h3>
            <form method="post" action="registra_usuario_emyjoias.php" id="formCadastrarse">
                <div class="form-group">
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário" required="required">
                
                    <?php 
                        if($erro_usuario) {
                            echo "<font color='#FF0000'>Usuário já existe!</font>";
                        }
                    ?>
                </div>

                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="required">
                
                    <?php
                        if($erro_email) {
                            echo  "<font color='#FF0000'>Email já existe!</font>";
                        }
                    ?>
                </div>
                        
                <div class="form-group">
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="required">
                </div>
                        
                <button type="submit" class="btn btn-primary form-control">Inscreva-se</button>
            </form>
        </div>     
                            
        <!-- Rodape -->
        <footer id="rodape">
            <div class="container">
                <div class="row">   
                    <div class="col-md-4">
                        <span class="img-logo">Emy Joias</span>
                    </div>
                    
                    <div class="col-md-2">
                        <h4>Fundadora</h4>
                        <ul class="nav">
                        <li><a href="sobre.html">Sobre Emy</a></li>                
                        </ul>
                    </div>

                    <div class="col-md-2">
                        <h4>contate-nos</h4>
                        <ul class="nav">
                        <li id="email"><a href="" onclick="start()">Email</a></li>
                        <li id="telefone"><a href="" onclick="start()">Telefone</a></li>
                        </ul>
                    </div>

                    <div class="col-md-4">
                        <ul class="nav">
                        <h4>Acompanhe-nos no instagram</h4>
                        <li class="item-rede-social"><a href="https://www.instagram.com/_emyjoias/?hl=bg"><img src="imagens/instagram.png"></a></li>
                        </ul>
                    </div>
                </div><!-- /row -->
            </div><!-- /container -->
        </footer>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <script src="bootstrap/js/bootstrap.min.js"></script>

        <script language="javascript" src="emyjs.js"></script>
	</body>
</html>