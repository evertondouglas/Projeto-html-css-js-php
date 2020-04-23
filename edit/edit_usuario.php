<?php
session_start();
include_once("conexao.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Editar</title>		
	</head>
	<body>
		<a href="cad_usuario.php">Cadastrar</a><br>
		<a href="index.php">Listar</a><br>
		<h1>Editar Usuário</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_edit_usuario.php">
			<input type="hidden" name="id" value="<?php echo $row_usuario['id']; ?>">
			
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome completo" value="<?php echo $row_usuario['nome']; ?>"><br><br>
			
			<label>Cpf: </label>
			<input type="text" name="cpf" placeholder="Digite o seu melhor e-mail" value="<?php echo $row_usuario['cpf']; ?>"><br><br>

			<label>Rua: </label>
			<input type="text" name="rua" placeholder="cpf" value="<?php echo $row_usuario['rua']; ?>"><br><br>

			<label>Numero Casa: </label>
			<input type="text" name="numero_casa" placeholder="cpf" value="<?php echo $row_usuario['numero_casa']; ?>"><br><br>
			 
			<label>Cidade: </label>
			<input type="text" name="cidade" placeholder="cpf" value="<?php echo $row_usuario['cidade']; ?>"><br><br>

			<label>Estado: </label>
			<input type="text" name="estados_brasil" placeholder="cpf" value="<?php echo $row_usuario['estados_brasil']; ?>"><br><br>

			<label>Zona: </label>
			<input type="text" name="zona" placeholder="cpf" value="<?php echo $row_usuario['zona']; ?>"><br><br>

			<label>Residencia: </label>
			<input type="text" name="residencia" placeholder="cpf" value="<?php echo $row_usuario['residencia']; ?>"><br><br>

			<label>Terreno: </label>
			<input type="text" name="terreno" placeholder="cpf" value="<?php echo $row_usuario['terreno']; ?>"><br><br>

			<label>Status: </label>
			<input type="text" name="processa_status" placeholder="cpf" value="<?php echo $row_usuario['processa_status']; ?>"><br><br>

			<label>Data e hora de cadastro: </label>
			<input type="text" name="created" placeholder="cpf" value="<?php echo $row_usuario['created']; ?>"><br><br>
			
			<input type="submit" value="Editar">
		</form>
	</body>
</html>