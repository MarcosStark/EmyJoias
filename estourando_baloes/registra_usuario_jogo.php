<?php

require_once("db_balao_class.php");

$usuario =  $_POST["usuario"];
$email = $_POST["email"];
$senha = md5($_POST["senha"]);

$objDb = new db();
$link = $objDb->conecta_mysql();

/*$usuario_existe = false;
$email_existe = false;

//verificar se o usuário já existe no bd
$sql = "select * from usuarios where usuario = '$usuario'";

/*if($resultado_id = mysqli_query($link, $sql)) {

    $dados_usuario = mysqli_fetch_array($resultado_id);

    if(isset($dados_usuario['usuario'])) {
      $usuario_existe = true;
    } else {
      echo '';
    }

} else {
  echo "Erro ao tentar localizar usuário.";
}

//verificar se o email já existe no bd
$sql = "select * from usuarios where email = '$email'";

if($resultado_id = mysqli_query($link, $sql)) {

    $dados_usuario = mysqli_fetch_array($resultado_id);

    if(isset($dados_usuario['email'])) {
      $email_existe = true;
    } else {
      echo '';
    }

} else {
  echo "Erro ao tentar localizar email.";
}

if($usuario_existe || $email_existe) {

  $retorno_get = '';

  if($usuario_existe){
    $retorno_get.= "erro_usuario=1&";
  }

  if($email_existe){
    $retorno_get.= "erro_email=1&";
  }

  header('Location: inscrevase.php?'.$retorno_get);
  die();
}
*/

//inserir no banco de dados
$sql = "insert into usuarios(usuario, email, senha) values('$usuario', '$email', '$senha')"; //aspas duplas convertem a varável em seu próprio valor 

//executar a query
if(mysqli_query($link, $sql)){ //$link -> link de conexão com banco e $sql -> query a ser executada
  echo "Usuário registrado com sucesso.";
}else {
  echo "Erro ao registrar usuário.";
};

?>