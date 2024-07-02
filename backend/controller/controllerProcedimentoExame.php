<?php
class controllerProcedimentoExame{
    public function listarProcedimento(){
        try{
            $modelProcedimento = new modelProcedimento();
            return $modelProcedimento->listarProcedimento();
        }catch(PDOException $e){
            return false;
        }
    }

    public function cadastrarProcedimento($id_tipos_procedimento,$id_procedimento_exames){
        try{
            $modelProcedimento = new modelProcedimento();
            return $modelProcedimento->cadastrarProcedimento($id_tipos_procedimento,$id_procedimento_exames);
        }catch(PDOException $e){
            return false;
        }
    }
}
?>