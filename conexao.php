<?php

// atributos básicos para um conexão com banco MySQL
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "cadastrosuece";

// realizando a conexão
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco) or die;
if(!mysqli_set_charset($conexao, 'UTF8')) {
    echo "Não conseguiu setar o charset";
}

?>