<?php
require_once("backend/services/db.php");
require_once("backend/controller/controllerProcedimentoExame.php");
require_once("backend/model/modelProcedimentoExame.php");

$data = json_decode(file_get_contents('php://input'),true);

$id_tipos_procedimento = $data["id_tipos_procedimento"];
$id_exames = $data["id_exame"];


$controllerProcedimento= new controllerProcedimentoExame();
$resultado = $controllerProcedimento->cadastrarProcedimento($id_tipos_procedimento,$id_exames);

if($resultado) echo "deu muito bom";

?>