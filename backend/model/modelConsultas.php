<?php
class modelConsultas{
    public function listarConsultas(){
        try{
            $pdo = Database::conexao();
            $sql = $pdo->query("SELECT * FROM tbl_consultas");
            $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        }catch(PDOException $e){
            return false;
        }
    }
    public function cadastrarConsultas($id_prontuario,$id_funcionario_atendimento,$detalhes){
        try{
            $pdo = Database::conexao();
            $stmt = $pdo->prepare("INSERT INTO tbl_consultas (id_prontuario,id_funcionario_atendimento,detalhes) VALUES (:id_prontuario,:id_funcionario_atendimento,:detalhes)");
            $stmt->bindParam("id_prontuario",$id_prontuario);
            $stmt->bindParam("id_funcionario_atendimento", $id_funcionario_atendimento);
            $stmt->bindParam("detalhes", $detalhes);
            $stmt->execute();
            return true;
        }catch(PDOException $e){
            return false;
        }
    }
    public function atualizarConsultas($id_consulta,$detalhes){
        try{
            $pdo = Database::conexao();
            $stmt = $pdo->prepare("UPDATE tbl_consultas SET detalhes = :detalhes WHERE id_consulta = :id_consulta");
            $stmt->bindParam("id_consulta",$id_consulta);
            $stmt->bindParam("detalhes",$detalhes);
            $stmt->execute();
            return false;
        }catch(PDOException $e){
            return false;
        }
    }
    public function excluirConsultas(){
        try{

        }catch(PDOException $e){

        }
    }
}
?>