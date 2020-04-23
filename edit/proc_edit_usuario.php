<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
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
$data = filter_input(INPUT_POST, 'created', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "E-mail: $cpf <br>";

$result_usuario = "UPDATE usuarios SET nome='$nome', cpf='$cpf', rua='$rua', numero_casa='$numero_casa', cidade='$cidade', estados_brasil='$estadosBrasil', zona='$zona', residencia='$residencia', terreno='$terreno', processa_status='$processa_status', created='$data', modified=NOW() WHERE id='$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_affected_rows($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
	header("Location: editar.php?id=$id");
}
