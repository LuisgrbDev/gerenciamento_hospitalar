<?php

class controllerPaciente{
    public function listarPaciente(){
        try{
            $modelPaciente = new modelPaciente();
            return $modelPaciente->listarPaciente();
        }catch(PDOException $e){
            return false;
        }
    }

    public function cadastrarPaciente($nome,$sobrenome,$email,$cep,$logradouro,$numero,$bairro,$cidade,$uf){
        try{
            $modelPaciente = new modelPaciente();
            return $modelPaciente->cadastrarPaciente($nome,$sobrenome,$email,$cep,$logradouro,$numero,$bairro,$cidade,$uf);

        }catch(PDOException $e){
            return false;
        }
    }

    public function atualizarPaciente($nome,$sobrenome,$email,$cep,$logradouro,$numero,$bairro,$cidade,$uf,$id_status,$id_prontuario,$id_paciente){
        try{
            $modelPaciente = new modelPaciente();
            return $modelPaciente->atualizarPaciente($nome,$sobrenome,$email,$cep,$logradouro,$numero,$bairro,$cidade,$uf,$id_status,$id_prontuario,$id_paciente);
        }catch(PDOException $e){
            return false;
        }
    }

    public function exlcuirPaciente($id_paciente){
        try{
            $modelPaciente = new modelPaciente();
            return $modelPaciente->exlcuirPaciente($id_paciente);   
        }catch(PDOException $e){
            return false;
        }
    }
}

?>