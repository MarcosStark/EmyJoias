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

        <!-- navbar -->
        <div class="collapse navbar-collapse" id="barra-navegacao">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Home</a></li>
            <li><a href="prata.php">Prata</a></li>

            <li class="dropdown"> 
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Semijoias <span class="caret"></span>
              </a> 
              <ul class="dropdown-menu">
                <li> <a href="feminino.php" class="btn-sexo">Feminino</a> </li>
                <li> <a href="masculino.php">Masculino</a> </li>
              </ul>
            </li>

            <li><a href="folheados.php">Folheados</a></li>
            <li class="divisor" role="separator"></li>
            <li><a href="sobre.php">Sobre Emy</a></li>
            
          </ul>
        </div>
      </div><!-- /container -->
    </nav><!-- /nav -->

        <div class="col-md-2"></div>
        <div class="col-md-8"><h1>Página inacabada!</h1></div>
        <div class="col-md-2"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>