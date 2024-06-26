<?php

class modelPaciente{
    public function listarPaciente(){
        try{
            $pdo = Database::conexao();
            $listar = $pdo->query("SELECT * FROM tbl_paciente");
            $resultado = $listar->fetchAll(PDO::FETCH_ASSOC);

            return $resultado;
        }catch (PDOException $e){
            return false;
        }
    }
    
    public function cadastrarPaciente($nome, $sobrenome, $email, $cep, $logradouro,
                                        $numero, $bairro, $cidade, $uf){
        try {
            //$nome = filter_var($nome, FILTER_SANITIZE_STRING);
            $nome = htmlspecialchars($nome, ENT_QUOTES);
            $sobrenome = htmlspecialchars($sobrenome, ENT_QUOTES);
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            $cep = filter_var($cep, FILTER_SANITIZE_NUMBER_INT);
            $logradouro = htmlspecialchars($logradouro, ENT_QUOTES);
            $numero = filter_var($numero, FILTER_SANITIZE_NUMBER_INT);
            $bairro = htmlspecialchars($bairro, ENT_QUOTES);
            $cidade = htmlspecialchars($cidade, ENT_QUOTES);
            $uf = htmlspecialchars($uf, ENT_QUOTES);

            $pdo = Database::conexao();
            $cadastrar = $pdo->prepare("CALL cadastrarPaciente(:nome, :sobrenome, :email, :cep,
                                        :logradouro, :numero, :bairro, :cidade, :uf)");
            $cadastrar->bindParam(":nome", $nome);
            $cadastrar->bindParam(":sobrenome", $sobrenome);
            $cadastrar->bindParam(":email", $email);
            $cadastrar->bindParam(":cep", $cep);
            $cadastrar->bindParam(":logradouro", $logradouro);
            $cadastrar->bindParam(":numero", $numero);
            $cadastrar->bindParam(":bairro", $bairro);
            $cadastrar->bindParam(":cidade", $cidade);
            $cadastrar->bindParam(":uf", $uf);
            $cadastrar->execute();

            return true;

        } catch (PDOException $e) {
            echo $e;
            return false;
        }
    }
    public function atualizarPaciente($nome,$sobrenome,$email,$cep,$logradouro,$numero,$bairro,$cidade,$uf,$id_status,$id_prontuario,$id_paciente){
        try{
            $pdo = Database::conexao();
            $prepare = $pdo->prepare("UPDATE tbl_paciente SET nome = :nome,sobrenome = :sobrenome, email = :email,cep = :cep,logradouro = :logradouro, numero = :numero,bairro = :bairro, cidade = :cidade,uf = :uf,id_status = :id_status, id_prontuario = :id_prontuario WHERE id_paciente = :id_paciente");
            $prepare->bindParam(":nome",$nome);
            $prepare->bindParam(":sobrenome",$sobrenome);
            $prepare->bindParam(":email",$email);
            $prepare->bindParam(":cep",$cep);
            $prepare->bindParam(":logradouro",$logradouro);
            $prepare->bindParam(":numero",$numero);
            $prepare->bindParam(":bairro",$bairro);
            $prepare->bindParam(":cidade",$cidade);
            $prepare->bindParam(":uf",$uf);
            $prepare->bindParam(":id_status",$id_status);
            $prepare->bindParam(":id_prontuario",$id_prontuario);
            $prepare->bindParam(":id_paciente",$id_paciente);
            $prepare->execute();
            return true;
        } catch(PDOException $e){
            
            return false;
        }
    }
    public function exlcuirPaciente($id_paciente){
        try{
            $pdo = Database::conexao();
            $prepare  = $pdo->prepare("DELETE FROM tbl_paciente WHERE id_paciente = :id_paciente");
            $prepare->bindParam("id_paciente", $id_paciente);
            $prepare->execute();

        } catch(PDOException $e){

        }
    }
}

?>