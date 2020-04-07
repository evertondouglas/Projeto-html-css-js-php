<?php
session_start();
include_once("conexao_situacao.php.php");

$erros = NULL;
function vazio($args){
    global $erros;
    if(!empty($args) && is_array($args)){
        foreach($args as $arg){
            if(empty($_POST[$arg])){
				$erros[$arg] = $arg . "  ";
				
            }
        }
    }
}
if(isset($_POST)){
    vazio(['cpf', 'rua', 'numero_casa', 'cidade', 'estados_brasil', 'zona', 'residencia', 'terreno']);
    if($erros){
		$_SESSION['msg'] = "<p style='color:red;'>Não foi possível cadastradar. Campos vazios</p><br>";
		header("Location: painel.php");
    } else {
        $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
$numero_casa = filter_input(INPUT_POST, 'numero_casa', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$estadosBrasil = filter_input(INPUT_POST, 'estados_brasil', FILTER_SANITIZE_STRING);
$zona = filter_input(INPUT_POST, 'zona', FILTER_SANITIZE_STRING);
$residencia = filter_input(INPUT_POST, 'residencia', FILTER_SANITIZE_STRING);
$terreno = filter_input(INPUT_POST, 'terreno', FILTER_SANITIZE_STRING);


$result_usuario = "INSERT INTO usuarios (cpf, rua, numero_casa, cidade, estados_brasil, zona, residencia, terreno, created) VALUES ('$cpf','$rua','$numero_casa', '$cidade', '$estadosBrasil', '$zona', '$residencia', '$terreno', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Cadastrado feito com sucesso</p><br>";
	header("Location: painel.php");
}

    }
}


