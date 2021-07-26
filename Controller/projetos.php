<?php
require('../Model/banco.php');


function cadastroProjeto(){
    

   
    $nomeProjeto = trim(strip_tags($_POST['nomeProjeto']));
    $datainicioProjeto = trim(strip_tags($_POST['datainicioprojeto']));
    $datafinalProjeto = trim(strip_tags($_POST['datafinalprojeto']));

    $projeto = new Projeto();

    
    $cadastra = $projeto->cadastraProjetobanco($nomeProjeto,$datainicioProjeto,$datafinalProjeto);

   header('location: ../index.php');
   
}
function pegarprojetoscontrole(){    
       
    $projeto = new Projeto;    
    $projetos = $projeto->pegarprojetos(); 
}












//Gerenciador de Rotas
if (isset($_GET['action']) and function_exists($_GET['action']) ) {

    call_user_func($_GET['action']);
  
  } else {
  
    header('location: index.php');
  
  }