<?php

class controllerCargos{
    public function listarCargos(){
        try{    
            $modelCargos = new modelCargos();
            return $modelCargos->listarCargos();
        }catch(PDOException $e){
            return false;
        }
    }
    public function cadastrarCargos($descricao_cargo){
        try{
            $modelCargos = new modelCargos();
            return $modelCargos->cadastrarCargos($descricao_cargo);
        }catch(PDOException $e){
            return false;
        }
    }
    public function atualizarCargos(){
        try{

        }catch(PDOException $e){
            
        }
    }
    public function excluirCargos(){
        try{

        }catch(PDOException $e){
            
        }
    }

}


?>