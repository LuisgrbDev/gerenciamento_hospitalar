<?php
require_once("backend/services/db.php");
require_once("backend//controller/controllerPaciente.php");
require_once("backend/model/modelPaciente.php");

$data = json_decode(file_get_contents('php://input'),true);

$nome = $data["nome"];
$sobrenome = $data["sobrenome"];
$email = $data["email"];
$cep = $data["cep"];
$logradouro = $data["logradouro"];
$numero = $data["numero"];
$bairro = $data["bairro"];
$cidade = $data["cidade"];
$uf = $data["uf"];


$controllerPaciente = new controllerPaciente();
$resultado = $controllerPaciente->cadastrarPaciente($nome,$sobrenome,$email,$cep,$logradouro,$numero,$bairro,$cidade,$uf);

if($resultado) echo "deu muito bom";


?>