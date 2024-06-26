<?php
    require_once("backend/services/db.php");
    require_once("backend/controller/controllerPaciente.php");
    require_once("backend/model/modelPaciente.php");

    $data = json_decode(file_get_contents("php://input"),true);
    $nome =  $data["nome"];
    $sobrenome =$data["sobrenome"];
    $email =$data["email"];
    $cep =$data["cep"];
    $logradouro =$data["logradouro"];
    $numero =$data["numero"];
    $bairro =$data["bairro"];
    $cidade =$data["cidade"];
    $uf =$data["uf"];
    $id_status =$data["id_status"];
    $id_prontuario =$data["id_prontuario"];
    $id_paciente =$data["id_paciente"];

    $controllerPaciente=  new controllerPaciente();
    $resultado = $controllerPaciente->atualizarPaciente($nome,$sobrenome,$email,$cep,$logradouro,$numero,$bairro,$cidade,$uf,$id_status,$id_prontuario,$id_paciente);
    

if($resultado) {
    echo ("Paciente atualizado com sucesso!");
} else {
    echo ("deu erro");
}
  
   

?>