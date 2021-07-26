<?php 
 require ('../infra/connection.php');
 class Projeto {
    public $conexao;
    
    public function __construct() {
        $this->conexao = new Connection();  
    }

 }