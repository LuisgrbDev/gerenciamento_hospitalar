<?php
class controllerConsultas{
    public function listarConsultas(){
        try{
            $modelConsulta = new modelConsultas();
            return $modelConsulta->listarConsultas();
        }catch(PDOException $e){
            return false;
        }
    }
    public function cadastrarConsultas($id_prontuario,$id_funcionario_atendimento,$detalhes){
        try{
            $modelConsulta = new modelConsultas();
            return $modelConsulta->cadastrarConsultas($id_prontuario,$id_funcionario_atendimento,$detalhes);
        }catch(PDOException $e){
            return false;
        }
    }
    public function atualizarConsultas($id_consulta,$detalhes){
        try{
            $modelConsulta = new modelConsultas();
            return $modelConsulta->atualizarConsultas($id_consulta,$detalhes);

        }catch(PDOException $e){
            return false;
        }
    }
    public function excluirConsultas($id_consulta){
        try{
            $modelConsulta = new modelConsultas();
            return $modelConsulta->excluirConsultas($id_consulta);
        }catch(PDOException $e){
            return false;
        }
    }
}
?>