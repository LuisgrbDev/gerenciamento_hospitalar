<?php
require_once("backend/services/db.php");
require_once("backend//controller/controllerStatus.php");
require_once("backend/model/modelStatus.php");


$controllerStatus = new controllerStatus();
$resultado = $controllerStatus->listarStatus();


if($resultado) {
    $result = array("Status", $resultado);
    echo json_encode($result);
} else {
    echo ("deu erro");
}


?>