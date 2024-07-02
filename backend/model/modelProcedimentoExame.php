<?php
class modelProcedimentoExame{
    public function listarProcedimento(){
        try{
            $pdo= Database::conexao();
            $sql = $pdo->query("SELECT * FROM tbl_procedimentos_exames");
            $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        }catch (PDOException $e){
            return true;
        }
    }

    public function cadastrarProcedimento($id_tipos_procedimento,$id_procedimento_exames){
        try{
            $pdo = Database::conexao();
            $stmt = $pdo->prepare("INSERT INTO tbl_procedimentos_exames (id_tipos_procedimento,id_procedimento_exames) VALUES (:id_tipos_procedimento,:id_procedimento_exames)");
            $stmt->bindParam("id_tipos_procedimento",$id_tipos_procedimento);
            $stmt->bindParam("id_procedimento_exames",$id_procedimento_exames);
            $stmt->execute();
            
            return true;

        }catch(PDOException $e){
            return false;
        }
    }
}

?>