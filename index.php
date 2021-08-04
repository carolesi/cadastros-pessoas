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
        <input type="text" name="id"><br>
        <label for="nome">Nome:</label>
        <input type="text" name="nome"><br>
        <label for="cpf">CPF:</label>
        <input type="text" name="cpf"><br>
        <label for="funcao">Função:</label>
        <input type="text" name="funcao"><br>
        <input type="submit" value="Salvar dados">
    </form>
</body>
</html>