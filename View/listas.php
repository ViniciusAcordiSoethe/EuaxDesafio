<?php
require ('../Model/banco.php');
$projeto = new Projeto;    
$projetos = $projeto->pegarprojetos(); 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Euax</title>
</head>
<body>
    <Table>
    <tr>
    <th>ID Projeto</th>
    <th>Nome Projeto</th>
    <th>Data Inicio</th>
    <th>Data Fim</th>
    <th>% Completo</th>
    <th>Atrasado</th>
    <th>Editar||Excluir</th>
  </tr>
    <?php foreach ($projetos as $projeto) : ?>
    <tr>
    <th><?= $projeto['id_projeto']?></th>
    <th><?= $projeto['nome_projeto']?></th>
    <th><?= $projeto['projeto_data_inicio']?></th>
    <th><?= $projeto['projeto_data_final']?></th>
    <th>% Completo</th>
    <th>Atrasado</th>
    <th><a href='#'>Editar</a>||<a href='#'>Editar</a></th>
  </tr> 
    <?php endforeach ?>
    </table>
</body>
</html>