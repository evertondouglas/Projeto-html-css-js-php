<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
$numero_casa = filter_input(INPUT_POST, 'numero_casa', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$estadosBrasil = filter_input(INPUT_POST, 'estados_brasil', FILTER_SANITIZE_STRING);
$zona = filter_input(INPUT_POST, 'zona', FILTER_SANITIZE_STRING);
$residencia = filter_input(INPUT_POST, 'residencia', FILTER_SANITIZE_STRING);
$terreno = filter_input(INPUT_POST, 'terreno', FILTER_SANITIZE_STRING);
$processa_status = filter_input(INPUT_POST, 'processa_status', FILTER_SANITIZE_STRING);


$result_usuario = "INSERT INTO usuarios (nome, cpf, rua, numero_casa, cidade, estados_brasil, zona, residencia, terreno, processa_status, created) VALUES ('$nome', '$cpf', '$rua', '$numero_casa', '$cidade', '$estadosBrasil', '$zona', '$residencia', '$terreno', '$processa_status', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: cad_usuario.php");
}
