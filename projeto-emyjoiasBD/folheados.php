<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Emy Joias</title>
    <link rel="icon" href="imagens/favicon.png">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-fixed-top navbar-inverse navbar-transparente">
      <div class="container">
        
        <!-- header -->
        <div class="navbar-header">
          
          <!-- botao toggle -->
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

    <!-- Conteudos -->

    <section id="apresentacao">
      <div class="container">
        <div class="row">

            <div class="col-md-3">
              <img src="imagens/carrosel1.jpeg" class="img-responsive img-joias">
               <div>
                <table width="100%" class="p-joias">
                <tr>
                    <td colspan="2">Bracelete laço</td>
                    <td class="preco">R$ 70,00</td>
                </tr>
                <tr>
                  <td colspan="2">Cordão baiano duas cores</td>
                  <td class="preco">R$ 55,00</td>
                </tr>
                </table>
               </div>
            </div>

            <div class="col-md-3">
              <img src="imagens/carrosel2.jpeg" class="img-responsive img-joias">
              <div>
                <table width="100%" class="p-joias">
                <tr>
                  <td colspan="2">Pulseira</td><br>
                  <td class="preco">R$ 69,00</td>
                </tr>
                </table>
               </div>
            </div>

            <div class="col-md-3">
              <img src="imagens/carrosel3.jpeg" class="img-responsive img-joias">
              <div>
                <table width="100%" class="p-joias">
                <tr>
                  <td colspan="2">Bracelete abençoada</td>
                  <td class="preco">R$ 50,00</td>
                </tr><br>
                <tr>
                  <td colspan="2">Pulseira cordão baiano</td>
                  <td class="preco">R$ 50,00</td>
                </tr>
                </table>
               </div>
            </div>
            <div class="col-md-3">
              <img src="imagens/carrosel4.jpeg" class="img-responsive img-joias">
              <div>
                <table width="100%" class="p-joias">
                <tr>
                  <td colspan="2">Colares religiosos</td>
                  <td class="preco">R$ 45,00</td>
                </tr><br>
                </table>
               </div>
            </div>

        </div><!-- /row -->
      </div>
    </section>
  
    <!-- Rodape -->
    <footer id="rodape">
      <div class="container">
        <div class="row">
          
          <div class="col-md-2">
            <span class="img-logo">Emy Joias</span>
          </div>

          <div class="col-md-2">
            <h4>company</h4>
            <ul class="nav">
              <li><a href="">Sobre</a></li>
              <li><a href="">Empregos</a></li>
              <li><a href="">Imprensa</a></li>
              <li><a href="">Novidades</a></li>
            </ul>
          </div>

          <div class="col-md-2">
            <h4>comunidades</h4>
            <ul class="nav">
              <li><a href="">Artistas</a></li>
              <li><a href="">Desenvolvedores</a></li>
              <li><a href="">Marcas</a></li>
            </ul>
          </div>

          <div class="col-md-2">
            <h4>links uteis</h4>
            <ul class="nav">
              <li><a href="">Ajuda</a></li>
              <li><a href="">Presentes</a></li>
              <li><a href="">Player da web</a></li>
            </ul>
          </div>

          <div class="col-md-4">
            <ul class="nav">
              <h4>Acompanhe-nos no instagram</h4>
              <li class="item-rede-social"><a href="https://www.instagram.com/_emyjoias/?hl=bg"><img src="imagens/instagram.png"></a></li>
            </ul>
          </div>
        </div><!-- /row -->
      </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>