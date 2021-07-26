<?php
require ('../Model/banco.php');
$atividade = new Projeto;    
$atividades = $atividade->pegaratividades(); 
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
    <th>ID atividade</th>
    <th>Nome Atividade</th>
    <th>ID DO PROJETO</th>
    <th>Data Inicio</th>
    <th>Data Fim</th>
    <th>Finalizado</th>
    <th>Editar||Excluir</th>
  </tr>
    <?php foreach ($atividades as $atividade) : ?>
    <tr>
    <th><?= $atividade['id_atividade']?></th>
    <th><?= $atividade['nome_atividade']?></th>
    <th><?= $atividade['id_projeto']?></th>
    <th><?= $atividade['atividade_data_inicio']?></th>
    <th><?= $atividade['atividade_data_final']?></th>
    <th><?= $atividade['Finalizada']?></th>
    <th><a href='#'>Editar</a>||<a href='../Controller/projetos.php?action=deletaratividade&id_atividade=<?= $atividade['id_atividade']?>'>Excluir</a></th>
  </tr> 
    <?php endforeach ?>
    </table>
</body>
</html>