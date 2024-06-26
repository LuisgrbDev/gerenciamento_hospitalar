<?php
class controllerProntuario{
    public function listarProntuarios(){
        try{
            $modelProntuario = new modelProntuario();
            return $modelProntuario->listarProntuarios();

        }catch(PDOException){
            return false;
        }
    }

    public function cadastrarProntuarios($data_cadastro){
        try{
            $modelProntuario = new modelProntuario();
            return $modelProntuario->cadastrarProntuarios($data_cadastro);
        }catch(PDOException $e){
            return false;
        }
    }
    public function excluirProntuarios($id_prontuario){
        try{
            $modelProntuario = new modelProntuario();
            return $modelProntuario->excluirProntuarios($id_prontuario);
        }catch(PDOException $e){
            return false;
        }
    }
}


?>