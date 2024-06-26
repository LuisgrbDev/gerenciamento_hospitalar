<?php
require_once("backend/services/db.php");
require_once("backend//controller/controllerPaciente.php");
require_once("backend/model/modelPaciente.php");


$controllerPaciente = new controllerPaciente();
$resultado = $controllerPaciente->listarPaciente();


if($resultado) {
    $result = array("Pacientes", $resultado);
    echo json_encode($result);
} else {
    echo ("deu erro");
}


?>