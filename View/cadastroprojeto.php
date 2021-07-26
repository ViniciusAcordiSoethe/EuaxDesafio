<?php
include_once ('../infra/connection.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Euax cadastro Projeto</title>
</head>
<body>
    <form action="../Controller/projetos.php?action=cadastroProjeto" method="post">
        <label>Nome do Projeto:</label>
        <input type="text" name="nomeProjeto">
        <br>
        <label>Data inicio:</label>
        <input type="date" name="datainicioprojeto">
        <br>
        <label>Data Final:</label>
        <input type="date" name="datafinalprojeto">
        <br>
        <input type="submit" name="cadastroProjeto" value="Cadastrar" >
    </form>
</body>
</html>