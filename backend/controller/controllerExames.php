<?php
class controllerExames{
    public function listarExames(){
        try{
            $modelExames = new modelExames();
            return $modelExames->listarExames();
             
        } catch(PDOException $e){
            return false;
        }
    }
    public function cadastrarExames($id_prontuario,$id_funcionario_solicitiante,$id_procedimentos_exame,$data_solicitacao){
        try{
            $modelExames = new modelExames();
            return $modelExames->cadastrarExames($id_prontuario,$id_funcionario_solicitiante,$id_procedimentos_exame,);

        } catch(PDOException $e){
            return false;
        }
    }
    public function atualizarExames($id_prontuario,$id_funcionario_solicitiante,$id_procedimentos_exame,$id_exame){
        try{
            $modelExames = new modelExames();
            return $modelExames->atualizarExames($id_prontuario,$id_funcionario_solicitiante,$id_procedimentos_exame,$id_exame);

        } catch(PDOException $e){
            return false;
        }
    }
    public function excluirExame($id_exame){
        try{
            $modelExames = new modelExames();
            return $modelExames->excluirExame($id_exame);

        } catch(PDOException $e){
            
        }
    }

}


?>