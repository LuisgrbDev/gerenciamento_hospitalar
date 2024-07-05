<?php
class modelExames{
    public function listarExames(){
        try{
            $pdo = Database::conexao();
            $sql= $pdo->query("SELECT  * FROM tbl_exames");
            $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        }catch(PDOException $e){
            return $e;
            return false;
        }
    }
    public function cadastrarExames($id_prontuario,$id_funcionario_solicitiante,$id_procedimentos_exame){
        try{
            $id_prontuario = filter_var($id_prontuario,FILTER_SANITIZE_NUMBER_INT);
            $id_funcionario_solicitiante = filter_var($id_funcionario_solicitiante,FILTER_SANITIZE_NUMBER_INT);
            $id_procedimentos_exame = filter_var($id_procedimentos_exame,FILTER_SANITIZE_NUMBER_INT);

            $pdo = Database::conexao();
            $cadastrar = $pdo->prepare("INSERT INTO tbl_exames (id_prontuario,id_funcionario_soliciante,id_procedimentos_exame,data_solicitacao) VALUES (:id_prontuario,:id_funcionario_solicitiante,:id_procedimentos_exame,now()");
            $cadastrar->bindParam("id_prontuario",$id_prontuario);
            $cadastrar->bindParam("id_funcionario_soliciante",$id_funcionario_solicitiante);
            $cadastrar->bindParam("id_procedimentos_exame",$id_procedimentos_exame);
            $cadastrar->execute();

            return true;
    }catch(PDOException $e){
        return $e;
        return false;
    }
}

public function atualizarExames($id_prontuario,$id_funcionario_solicitiante,$id_procedimentos_exame){
    try{
        $id_prontuario = filter_var($id_prontuario,FILTER_SANITIZE_NUMBER_INT);
        $id_funcionario_solicitiante = filter_var($id_funcionario_solicitiante,FILTER_SANITIZE_NUMBER_INT);
        $id_procedimentos_exame = filter_var($id_procedimentos_exame,FILTER_SANITIZE_NUMBER_INT);
        
        $pdo = Database::conexao();
        $cadastrar = $pdo->prepare("INSERT INTO tbl_exames (id_prontuario,id_funcionario_solicitiante,id_procedimentos_exame,data_solicitacao) VALUES (:id_prontuario,:id_funcionario_solicitiante,:id_procedimentos_exame,now()");
        $cadastrar->bindParam("id_prontuario",$id_prontuario);
        $cadastrar->bindParam("id_funcionario_solicitiante",$id_funcionario_solicitiante);
        $cadastrar->bindParam("id_procedimentos_exame",$id_procedimentos_exame);
        $cadastrar->execute();

        return true;
}catch(PDOException $e){
    return false;
}
}
public function excluirExame($id_exame){
    try{
        $id_exame = filter_var($id_exame,FILTER_SANITIZE_NUMBER_INT);

        $pdo = Database::conexao();
        $excluir = $pdo->prepare("DELETE FROM tbl_exames WHERE id_exame = :id_exame");
        $id_exame->bindParam("id_exame",$id_exame);
      
        $excluir->execute();

        return true;
}catch(PDOException $e){
    return false;
}
}
}
?>