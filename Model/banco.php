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
                $retorno[] = $row; 
            }
            return $retorno;

        } else {
            
           
            return false;
        }
    }
    function cadastraatividadebanco($nomeAtividade,$idprojeto,$datainicioatividade,$datafinalatividade, $finalizada){
        $sql = "INSERT INTO atividades( nome_atividade, id_projeto, atividade_data_inicio, atividade_data_final, Finalizada) VALUES ('$nomeAtividade','$idprojeto','$datainicioatividade','$datafinalatividade' , '$finalizada' )";
            $executa = mysqli_query($this->conexao->getConnection(), $sql);;
        
    }
    function pegaratividades(){
        $pesquisa = 'SELECT * FROM atividades';
            $exec= mysqli_query($this->conexao->getConnection(), $pesquisa); 
    
           if(mysqli_num_rows($exec) != 0 ) {
                
                while( $row = mysqli_fetch_array($exec) ){
                    $retorno[] = $row; 
                }
                return $retorno;
    
            } else {
                
               
                return false;
            }
        }
        function pegaratividadesonde($id_projeto){
            $pesquisa = "SELECT Finalizada FROM atividades WHERE id_projeto = $id_projeto";
                $exec= mysqli_query($this->conexao->getConnection(), $pesquisa); 
        
               if(mysqli_num_rows($exec) != 0 ) {
                    
                    while( $row = mysqli_fetch_array($exec) ){
                        $retorno[] = $row; 
                    }
                    return $retorno;
        
                } else {
                    
                   
                    return false;
                }
            }
            function deletaprojeto($idProjeto){

                $sql = "DELETE FROM projetos WHERE id_projeto = $idProjeto ";
                $executa = mysqli_query($this->conexao->getConnection(), $sql);
                
            }
            function deletaatividade($idatt){

                $sql = "DELETE FROM atividades WHERE id_atividade = $idatt ";
                $executa = mysqli_query($this->conexao->getConnection(), $sql);
                
            }
    }
 