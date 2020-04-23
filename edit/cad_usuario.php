<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Cadastrar</title>		
	</head>
	<body>
		<a href="cad_usuario.php">Cadastrar</a><br>
		<a href="index.php">Listar</a><br>
		<h1>Cadastrar Usuário</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="proc_cad_usuario.php">
			<label>Nome: </label>
			<input type="text" name="nome" placeholder="Digite o nome completo"><br><br>
			
			<label>Cpf: </label>
			<input type="text" name="cpf" placeholder="Digite o seu cpf"><br><br>

			<label>Rua: </label>
			<input type="text" name="rua" placeholder="digite o nome da rua" ><br><br>

			<label>Numero Casa: </label>
			<input type="text" name="numero_casa" placeholder="digite o número da casa"><br><br>
			 
			<label>Cidade: </label>
			<input type="text" name="cidade" placeholder="digite o nome da ciadade" ><br><br>

			<label>Estado: </label>
			<input type="text" name="estados_brasil" placeholder="digite o estado"><br><br>

			<label>Zona: </label>
			<input type="text" name="zona" placeholder="digite a zona" ><br><br>

			<label>Residencia: </label>
			<input type="text" name="residencia" placeholder="digite a residencia" ><br><br>

			<label>Terreno: </label>
			<input type="text" name="terreno" placeholder="tipo de terrreno"><br><br>
			<label >Statud de Processo:</label>
			<input type="text" name="processa_status" placeholder="processo de status"><br><br>
			
			<input type="submit" value="Cadastrar">
		</form>
	</body>
</html>