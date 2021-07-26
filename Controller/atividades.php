<?php
require('../Model/banco.php');


function cadastroAtividade(){
    

   
    $nomeAtividade = trim(strip_tags($_POST['nomeProjeto']));
    $idprojeto = trim(strip_tags($_POST['iddoProjeto']));
    $datainicioatividade = trim(strip_tags($_POST['datainicioprojeto']));
    $datafinalatividade = trim(strip_tags($_POST['datafinalprojeto']));

    $projeto = new Projeto();

    
    $cadastra = $projeto->cadastraatividadebanco($nomeAtividade,$idprojeto,$datainicioatividade,$datafinalatividade );

   header('location: ../index.php');
   
}












//Gerenciador de Rotas
if (isset($_GET['action']) and function_exists($_GET['action']) ) {

    call_user_func($_GET['action']);
  
  } else {
  
    header('location: index.php');
  
  }