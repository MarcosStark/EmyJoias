<?php

require_once("db_balao_class.php");

$level_game = $_POST["dificultity"];

$objDb = new db();
$link = $objDb->conecta_mysql();

$sql = "insert into jogo(level_game) values('$level_game')";

if(mysqli_query($link, $sql)){ 
    echo "registrado com sucesso.";
  }else {
    echo "Erro";
  };


?>

