<?php

include 'conexao.php';

// recebendo dados do formulário
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$funcao = $_POST['funcao'];

// inserir os dados preenchidos no banco de dados

// se já tem um id, edita
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "update tb_pessoas set pes_nome = '$nome', pes_cpf = '$cpf', pes_funcao = '$funcao' where pes_id = $id";

// senão, insere
} else {
    $sql = "INSERT INTO `tb_pessoas` (`pes_id`, `pes_nome`, `pes_cpf`, `pes_funcao`) VALUES (NULL, '$nome', '$cpf', '$funcao');";
}

// executar o comando SQL
mysqli_query($conexao, $sql);

// fechando a conexão
mysqli_close($conexao);

?>

<script type="text/javascript">
    // informa que foi salvo
    alert("Salvo com sucesso!");

    // redireciona para a página anterior
    window.location.href = "index.php";
</script>
