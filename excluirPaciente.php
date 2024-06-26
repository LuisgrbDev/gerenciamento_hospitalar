<?php
require_once("backend/services/db.php");
require_once("backend//controller/controllerPaciente.php");
require_once("backend/model/modelPaciente.php");

$data = json_decode(file_get_contents('php://input'),true);


$id_paciente = $data["id_paciente"];

$controllerPaciente = new controllerPaciente();
$resultado = $controllerPaciente->exlcuirPaciente($id_paciente);

if($resultado) echo "Paciente excluido com sucesso";


?>