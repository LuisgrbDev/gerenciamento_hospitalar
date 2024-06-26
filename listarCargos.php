<?php
require_once("backend/services/db.php");
require_once("backend/controller/controllerCargos.php");
require_once("backend/model/modelCargos.php");


$controllerCargos = new controllerCargos();
$resultado = $controllerCargos->listarCargos();


if($resultado) {
    $result = array("Cargos", $resultado);
    echo json_encode($result);
} else {
    echo ("deu erro");
}


?>