<?php
class modelCargos{
    public function listarCargos(){
        try{
            $pdo = Database::conexao();
            $sql = $pdo->query("SELECT * FROM tbl_cargos");
            $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
        }catch(PDOException $e){
            return false;
        }
    }
    public function cadastrarCargos($descricao_cargo){
        try{
            $pdo = Database::conexao();
            $prepare = $pdo->prepare("INSERT INTO  tbl_cargos (descricao_cargo) VALUES (:descricao_cargo)");
            $prepare->bindParam("descricao_cargo",$descricao_cargo);
            $prepare->execute();

            return true;
            
        }catch(PDOException $e){
            return false;
        }
    }
}




?>