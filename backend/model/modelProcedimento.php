<?php
class modelProcedimento{
    public function listarProcedimentos(){
        try{
            $pdo= Database::conexao();
            $sql = $pdo->query("SELECT * FROM tbl_tipos_procedimento");
            $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        }catch (PDOException $e){
            return true;
        }
    }

    public function cadastrarProcedimentos($descricao_procedimento){
        try{
            $pdo = Database::conexao();
            $stmt = $pdo->prepare("INSERT INTO tbl_tipos_procedimento (descricao_procedimento) VALUES (:descricao_procedimento)");
            $stmt->bindParam("descricao_procedimento",$descricao_procedimento);
            $stmt->execute();
            
            return true;

        }catch(PDOException $e){
            return false;
        }
    }
}

?>