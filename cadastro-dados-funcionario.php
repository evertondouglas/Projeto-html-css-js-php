<?php
session_start();
include_once("conexao_situacao-funcionario.php");

$nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$usuario = mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$cpf = mysqli_real_escape_string($conexao, trim($_POST['cpf']));
$telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$endereco = mysqli_real_escape_string($conexao, trim($_POST['endereco']));
$dataNasc = mysqli_real_escape_string($conexao, trim($_POST['dataNasc']));
$escolaridade = mysqli_real_escape_string($conexao, trim($_POST['escolaridade']));
$funcao = mysqli_real_escape_string($conexao, trim($_POST['funcao']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));

$sql = "select count(*) as total from usuarios where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] != 0) {
	$_SESSION['usuario_existe'] = true;
	header('Location: cadastro-func.php');
	exit;
}

$sql = "INSERT INTO usuarios (nome, usuario, cpf, telefone, email, endereco, dataNasc, escolaridade, funcao, senha, data_cadastro) VALUES ('$nome', '$usuario', '$cpf', '$telefone', '$email', '$endereco', '$dataNasc' ,'$escolaridade','$funcao', '$senha', NOW())";

if($conexao->query($sql) == TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: cadastro-func.php');
exit;
?>