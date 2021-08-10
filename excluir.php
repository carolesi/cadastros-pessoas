<?php

include 'conexao.php';

// recebendo dados do formulário
$id = $_GET['id'];

// inserir os dados preenchidos no banco de dados
$sql = "DELETE FROM `tb_pessoas` WHERE `tb_pessoas`.`pes_id` = ".$id;

// executar o comando SQL
mysqli_query($conexao, $sql);

// fechando a conexão
mysqli_close($conexao);

?>

<script type="text/javascript">
    // informa que foi salvo
    alert("Dados excluídos.");

    // redireciona para a página anterior
    window.location.href = "index.php";
</script>