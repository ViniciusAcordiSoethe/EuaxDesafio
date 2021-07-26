<?php 
include_once ('../infra/connection.php');
 class Projeto {
    public $conexao;
    
    public function __construct() {
        $this->conexao = new Connection();  
    }

    function cadastraProjetobanco($nomeProjeto,$datainicioProjeto,$datafinalProjeto){
        $sql = "INSERT INTO projetos (nome_projeto, projeto_data_inicio, projeto_data_final) VALUES ('$nomeProjeto','$datainicioProjeto','$datafinalProjeto' )";
            $executa = mysqli_query($this->conexao->getConnection(), $sql);;
        
    }

    function pegarprojetos(){
    $pesquisa = 'SELECT * FROM projetos';
        $exec= mysqli_query($this->conexao->getConnection(), $pesquisa); 

       if(mysqli_num_rows($exec) != 0 ) {
            
            while( $row = mysqli_fetch_array($exec) ){
                $produtos[] = $row; 
            }
            return $produtos;

        } else {
            
           
            return false;
        }
    }
    }
 