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

            <li><a href="">Folheados</a></li>
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
               <div id="carrosel1">
                  <table width="100%" class="p-joias">
                    <tr>
                      <td colspan="2"><strong>Bracelete laço</strong></td>
                      <td class="preco"><strong>R$ 70,00</strong></td>
                    </tr>
                    <tr>
                      <td colspan="2"><strong>Cordão baiano duas cores</strong></td>
                      <td class="preco"><strong>R$ 55,00</strong></td>
                    </tr>
                  </table>
               </div>
            </div>

            <div class="col-md-3">
              <div id="carrosel2">
                <table width="100%" class="p-joias">
                <tr>
                  <td colspan="2"><strong>Pulseira</strong></td>
                  <td class="preco"><strong>R$ 69,00</strong></td>
                </tr>
                </table>
               </div>
            </div>

            <div class="col-md-3">
              <div id="carrosel3">
                <table width="100%" class="p-joias">
                <tr>
                  <td colspan="2">Bracelete abençoada</td>
                  <td class="preco">R$ 50,00</td>
                </tr>
                <tr>
                  <td colspan="2">Pulseira cordão baiano</td>
                  <td class="preco">R$ 50,00</td>
                </tr>
                </table>
               </div>
            </div>

            <div class="col-md-3">
              <div id="carrosel4">
                <table width="100%" class="p-joias">
                <tr>
                  <td colspan="2">Colares religiosos</td>
                  <td class="preco">R$ 45,00</td>
                </tr>
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
                    </div>

                    <div class="col-md-2">
                        <h4>Fundadora</h4>
                        <ul class="nav">
                            <li><a href="sobre.php">Sobre Emy</a></li>                
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