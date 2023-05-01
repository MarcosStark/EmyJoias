<?php

    class db {

        //host - Instância onde mysql está instalado.
        private $host = "localhost";

        //usuário
        private $usuario = "root";

        //senha
        private $senha = "";

        //banco de dados
        private $database = "emy_joias";

        public function conecta_mysql(){

            //cria conexao php -> banco
            $conex = mysqli_connect($this->host, $this->usuario, $this->senha, $this->database);

            //ajustar o charset de comunicação entre  a aplicação e o banco de dados
            mysqli_set_charset($conex, "utf8");

            //verificar se houve erro de conexão com o banco de dados
            if(mysqli_connect_errno()){
                echo "Erro ao tentar conectar banco de dados".mysqli_connect_error(); //Função de descrição do erro
            };

            return $conex;

        }
    }
?>