<?php
require_once("backend/services/db.php");
require_once("backend//controller/controllerStatus.php");
require_once("backend/model/modelStatus.php");
$data = json_decode(file_get_contents('php://input'),true);

$descricao = $data["descricao"];


$controllerStatus = new controllerStatus();
$resultado = $controllerStatus->cadastrarStatus($descricao);

if($resultado) echo "deu muito bom";


?>