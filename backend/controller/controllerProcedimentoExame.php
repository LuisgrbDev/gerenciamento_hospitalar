<?php
class controllerProcedimentoExame{
    public function listarProcedimento(){
        try{
            $modelProcedimento = new modelProcedimentoExame();
            return $modelProcedimento->listarProcedimento();
        }catch(PDOException $e){
            return false;
        }
    }

    public function cadastrarProcedimento($id_tipos_procedimento,$id_exames){
        try{
            $modelProcedimento = new modelProcedimentoExame();
            return $modelProcedimento->cadastrarProcedimento($id_tipos_procedimento,$id_exames);
        }catch(PDOException $e){
            return false;
        }
    }
}
?>