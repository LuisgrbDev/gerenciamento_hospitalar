<?php
require_once("backend/services/db.php");
require_once("backend/controller/controllerConsultas.php");
require_once("backend/model/modelConsultas.php");

$data = json_decode(file_get_contents('php://input'),true);

$id_prontuario = $data["id_prontuario"];
$id_funcionario_atendimento = $data["id_funcionario_atendimento"];
$detalhes = $data["detalhes"];


$controllerConsultas= new controllerConsultas();
$resultado = $controllerConsultas->cadastrarConsultas($id_prontuario,$id_funcionario_atendimento,$detalhes);

if($resultado) echo "deu muito bom";

?>