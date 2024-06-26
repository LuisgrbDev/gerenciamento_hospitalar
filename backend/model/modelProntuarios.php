<?php
class modelProntuario{

    public function listarProntuarios(){
        try{
            $pdo = Database::conexao();
            $sql = $pdo->query("SELECT * FROM  tbl_prontuario");
            $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;  
        }catch(PDOException $e){
            return false;
        }
    }

    public function cadastrarProntuarios($data_cadastro){
        try{
            $pdo= Database::conexao();
            $prepare = $pdo->prepare("INSERT INTO tbl_prontuario (data_cadastro)  VALUES (:data_cadastro)");
            $prepare->bindParam("data_cadastro",$data_cadastro);
            $prepare->execute();
            return true;
        }catch(PDOException $e){
            return false;
        }
    }
    public function excluirProntuarios($id_prontuario){
        try{
            $pdo= Database::conexao();
            $prepare = $pdo->prepare("DELETE FROM tbl_prontuario WHERE id_prontuario = :id_prontuario");
            $prepare->bindParam("id_prontuario",$id_prontuario);
            $prepare->execute();
            return true;
        }catch(PDOException $e){
            return false;
        }
    }
}


?>