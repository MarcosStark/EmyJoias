<?php
	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
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

                    <a href="index.html" class="navbar-brand">
                        <span class="img-logo">Emy Joias</span>
                    </a>
                </div>

                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="prata.html">Prata</a></li>

                        <li class="dropdown"> 
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Semijoias<span class="caret"></span>
                            </a> 
                            <ul class="dropdown-menu">
                                <li> <a href="feminino.html" class="btn-sexo">Feminino</a> </li>
                                <li> <a href="masculino.html">Masculino</a> </li>
                            </ul>
                        </li>

                        <li><a href="folheados.html">Folheados</a></li>
                        <li class="divisor" role="separator"></li>

                        <li><a href="inscrevase_emyjoias.php">Cadastrar-se</a></li>
                            <li class="<?= $erro == 1 ? 'open' : ''?>">
                                <a id="entrar" data-target="#" href="#" data-toggle="dropdown" role="button" 
                                aria-haspopup="true" aria-expanded="false">Entrar</a>
                                    <ul class="dropdown-menu" aria-labelledby="entrar"> 
                                        <div class="col-md-12">
                                            <h3>Você possui uma conta?</h3>
                                            <br />
                                            <form method="post" action="validar_acesso_emyjoias.php" id="formLogin">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="campo_usuario" name="usuario" placeholder="Usuário" />
                                                </div>
                                                
                                                <div class="form-group">
                                                    <input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Senha" />
                                                </div>
                                                
                                                <button type="buttom" class="btn btn-primary" id="btn_login">Entrar</button>
                                                <br /><br/>
                                                
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
        </nav> <!-- /navbar -->			
                
            
        <!--Carrossel-->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
        
            <div class="carousel-inner">
                <div class="item active">
                    <img src="imagens/carrosel1.jpeg" class="img-carrosel">
                </div>
        
                <div class="item">
                    <img src="imagens/carrosel2.jpeg" class="img-carrosel">
                </div>
        
                <div class="item">
                    <img src="imagens/carrosel3.jpeg" class="img-carrosel">
                </div>

                <div class="item">
                    <img src="imagens/carrosel4.jpeg" class="img-carrosel">
                </div>
            </div>
        
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        
        <!-- Rodape -->
        <footer id="rodape">
            <div class="container">
                <div class="row">    
                    <div class="col-md-2">
                        <span class="img-logo">Emy Joias</span>
                    </div>

                    <div class="col-md-2">
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

                    <div class="col-md-2">
                    </div>

                    <div class="col-md-4">
                        <ul class="nav">
                        <h4>Acompanhe-nos no instagram</h4>
                            <li class="item-rede-social"><a href="https://www.instagram.com/_emyjoias/?hl=bg"><img src="imagens/instagram.png"></a></li>
                        </ul>
                    </div>
                </div><!--/row -->
            </div><!--/container -->
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <script src="bootstrap/js/bootstrap.min.js"></script>

        <script language="javascript" src="emyjs.js"></script>
  </body>
</html>