<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Euax cadastro atividade</title>
</head>
<body>
    <form action="../Controller/atividades.php?action=cadastroAtividade" method="post">
        <label>Nome do atividade:</label>
        <input type="text" name="nomeProjeto">
        <br>
        <label>ativadade do projeto de ID:</label>
        <input type="text" name="iddoProjeto">
        <br>
        <label>Data inicio:</label>
        <input type="date" name="datainicioprojeto">
        <br>
        <label>Data Final:</label>
        <input type="date" name="datafinalprojeto">
        <br>
        <label>Finalizada Sim Ou Não:</label>
        <input type="text" name="finalizada">
        <br>
        <input type="submit" name="cadastroAtividade" value="Cadastrar" >
    </form>
</body>
</html>