<?php
require_once("backend/services/db.php");
require_once("backend//controller/controllerProntuarios.php");
require_once("backend/model/modelProntuarios.php");


$controllerProntuarios = new controllerProntuario();
$resultado = $controllerProntuarios->listarProntuarios();


if($resultado) {
    $result = array("Prontuarios", $resultado);
    echo json_encode($result);
} else {
    echo ("deu erro");
}


?>