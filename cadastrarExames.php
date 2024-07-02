<?php
require_once("backend/services/db.php");
require_once("backend/controller/controllerExames.php");
require_once("backend/model/modelExames.php");

$data= json_decode(file_get_contents("php://input"),true);

$id_prontuario = $data["id_prontuario"];
$id_funcionario_solicitante = $data["id_funcionario_solicitante"];
$id_procedimentos_exame = $data["id_procedimentos_exames"];


$controllerExames = new controllerExames();
$resultado = $controllerExames->cadastrarExames($id_prontuario,$id_funcionario_solicitante,$id_procedimentos_exame);

if($resultado) echo "cadastrado com sucesso";


?>