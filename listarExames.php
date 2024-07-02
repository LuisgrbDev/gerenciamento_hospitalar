<?php
require_once("backend/services/db.php");
require_once("backend/controller/controllerExames.php");
require_once("backend/model/modelExames.php");


$controllerExames = new controllerExames();
$resultado = $controllerExames->listarExames();


if($resultado) {
    $result = array("Exames", $resultado);
    echo json_encode($result);
} else {
    echo ("deu erro");
}

?>