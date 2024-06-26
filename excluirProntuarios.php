<?php
require_once("backend/services/db.php");
require_once("backend//controller/controllerProntuarios.php");
require_once("backend/model/modelProntuarios.php");

$data = json_decode(file_get_contents('php://input'),true);


$id_prontuario = $data["id_prontuario"];

$controllerProntuario = new controllerProntuario();
$resultado = $controllerProntuario->excluirProntuarios($id_prontuario);

if($resultado) echo "Prontuarios excluido com sucesso";


?>