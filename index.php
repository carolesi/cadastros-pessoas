<?php

include 'conexao.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h2>Cadastro de Pessoas</h2>
    <form method="POST" action="salvar.php">
        <label for="id">ID:</label>
        <input type="hidden" name="id" 
        <?php
            if (isset($_GET['id'])) {
                echo "value = ".$_GET['id'].">";
                echo $_GET['id'];
            } else {
                echo ">";
            }
        ?>
        <br>
        <label for="nome">Nome:</label>
        <input type="text" name="nome"><br>
        <label for="cpf">CPF:</label>
        <input type="text" name="cpf"><br>
        <label for="funcao">Função:</label>
        <input type="text" name="funcao"><br>

        <a href="index.php">
            <input type="button" value="Limpar formulário">
        </a>

        <input type="submit" value="Salvar dados">
    </form>
    <hr>
    <table border="1">
        <tr>
            <th>ID</th><th>Nome</th><th>CPF</th><th>Funcao</th><th>Editar</th><th>Deletar</th>
        </tr>

        <?php 
        
        // pesquisar os dados da tabela tb_pessoas
        $sql = "SELECT * FROM `tb_pessoas`";

        // executar o comando SQL
        $resultados = mysqli_query($conexao, $sql);

        // laço para mostrar os dados das linhas de tb_pessoas
        while($linha = $resultados -> fetch_assoc()) {
            echo "<tr>
                    <td>".$linha['pes_id']."</td>
                    <td>".$linha['pes_nome']."</td>
                    <td>".$linha['pes_cpf']."</td>
                    <td>".$linha['pes_funcao']."</td>

                    <td align='center'>
                        <a href='index.php?id=".$linha['pes_id']."'><img src='imgs/edit.png' width='24px'></a>
                    </td>

                    <td align='center'>
                        <a href='excluir.php?id=".$linha['pes_id']."'><img src='imgs/delete.png' width='24px'></a>
                    </td>
                </tr>";
        }
        
        ?>


    </table>
</body>
</html>