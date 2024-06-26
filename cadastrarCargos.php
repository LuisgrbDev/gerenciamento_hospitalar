<?php
require_once("backend/services/db.php");
require_once("backend/controller/controllerCargos.php");
require_once("backend/model/modelCargos.php");

$data= json_decode(file_get_contents("php://input"),true);

$descricao_cargo = $data["descricao_cargo"];

$controllerCargos = new controllerCargos();
$resultado = $controllerCargos->cadastrarCargos($descricao_cargo);

if($resultado) echo "cadastrado com sucesso";


?>