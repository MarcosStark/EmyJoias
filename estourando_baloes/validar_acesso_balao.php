<?php

    session_start();
    
    require_once("db_balao_class.php");

    $usuario = $_POST["usuario"];
    $senha = md5($_POST["senha"]);

    $sql = "SELECT id, usuario, email FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha' ";

    $objDb = new db();
    $link = $objDb->conecta_mysql();
 
    $resultado_id = mysqli_query($link, $sql); // Como se trata do select o padrão é retornar FALSE ou uma instrução externa ao php, caso haja erro na consulta.

    if($resultado_id){
        $dados_usuario = mysqli_fetch_array($resultado_id); // Transforma em array e atribui a uma variável.

        if(isset($dados_usuario['usuario'])){

          $_SESSION['id_usuario'] = $dados_usuario['id'];
          $_SESSION['usuario'] = $dados_usuario['usuario'];
          $_SESSION['email'] = $dados_usuario['email'];

          header('Location: level_balao.php');

         }else {
          header('Location: index_game.php?erro=1');
        }
   } else {
        echo "Erro na consulta, favor entrar em contato com o admin do site.";
   }
?>