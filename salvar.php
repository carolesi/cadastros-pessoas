<?php

include 'conexao.php';

// recebendo dados do formulário
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$funcao = $_POST['funcao'];

// inserir os dados preenchidos no banco de dados
$sql = "INSERT INTO `tb_pessoas` (`pes_id`, `pes_nome`, `pes_cpf`, `pes_funcao`) VALUES (NULL, '$nome', '$cpf', '$funcao');";

// executar o comando SQL
mysqli_query($conexao, $sql);

?>

<script type="text/javascript">
    // informa que foi salvo
    alert("Salvo com sucesso!");

    // redireciona para a página anterior
    window.location.href = "index.php";
</script>