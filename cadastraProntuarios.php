<?php
require_once("backend/services/db.php");
require_once("backend//controller/controllerProntuarios.php");
require_once("backend/model/modelProntuarios.php");
$data = json_decode(file_get_contents('php://input'),true);

$data_cadastro = $data["data_cadastro"];


$controllerProntuarios = new controllerProntuario();
$resultado = $controllerProntuarios->cadastrarProntuarios($data_cadastro);

if($resultado) echo "deu muito bom";


?>