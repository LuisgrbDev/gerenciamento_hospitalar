<?php
require_once("backend/services/db.php");
require_once("backend//controller/controllerStatus.php");
require_once("backend/model/modelStatus.php");

$data = json_decode(file_get_contents('php://input'),true);


$id_status = $data["id_status"];

$controllerStatus = new controllerStatus();
$resultado = $controllerStatus->excluirStatus($id_status);

if($resultado) echo " excluido com sucesso";


?>