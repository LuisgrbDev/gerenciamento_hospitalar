<?php
require_once("backend/services/db.php");
require_once("backend/controller/controllerProcedimento.php");
require_once("backend/model/modelProcedimento.php");

$data = json_decode(file_get_contents('php://input'),true);

$descricao_procedimentos = $data["descricao_procedimentos"];


$controllerProcedimento= new controllerProcedimento();
$resultado = $controllerProcedimento->cadastrarProcedimentos($descricao_procedimentos);

if($resultado) echo "deu muito bom";

?>