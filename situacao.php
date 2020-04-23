
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Cadastrar</title>		
    </head>
    <link rel="stylesheet" href="css/style-form-use.css">
	<body>
        <section class="content">
            <div class="contato">
        <h1>Cadastro de Situação </h1>
        Ao cadastrar o local de área suspeita do <b>mosquito da dengue</b>, você contribui  para sociedade e diretamente para você. <br><br>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form class="form" method="POST" action="edit/proc_cad_usuario.php">

			<label>Nome:</label>
            <input type="text" class="field" name="nome" placeholder="Digite o nome completo">

            <label>CPF:</label>
            <input class="field" type="text" name="cpf" placeholder="Digite seu cpf">
            
            <div class="group">
                <label>Rua:</label>
                <input class="field field-rua" type="text" name="rua" placeholder="Nª da sua Rua">
                <label>Número:</label>
                <input class="field number" type="text" name="numero_casa" placeholder="Nª da Casa">
            </div>

            <label>Cidade:</label>
            <input class="field" type="text" name="cidade" placeholder="Nome da sua cidade">

			<label>Estados: </label>
			<select class="field" name="estados_brasil">
            <option value=" "></option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
            </select> <br>

            <div class="group-radio">
                <div class="group-radio-1">
                    <label >Tipo de Zona:</label><br>
                    <input type="radio" name="zona" value="urbana">
                    <label for="urbana">Zona Urbana</label><br>
                    <input type="radio"  name="zona" value="rural">
                    <label for="rural">Zona Rural</label><br><br>
                </div>

                <div class="group-radio-2">
                    <label> Tipo de Residencia: </label><br>
                    <input type="radio" name="residencia" value="residencial">
                    <label for="residencial">Residencial</label><br>
                    <input type="radio"  name="residencia" value="comercial">
                    <label for="comercial">Comercial</label><br>
                    <input type="radio"  name="residencia" value="industrial">
                    <label for="industrial">Industrial</label><br>
                </div>
            
                <div class="group-radio-3">
                    <label>Tipo de Terreno: </label><br>
                    <input type="radio" name="terreno" value="vazio">
                    <label for="vazio">Terreno Vazio</label><br>
                    <input type="radio"  name="terreno" value="terria">
                    <label for="terria">Edificação Térria</label><br>
                    <input type="radio"  name="terreno" value="Alta">
                    <label for="alta">Edificação Alta</label><br>
                </div>
                </div>

			<input type="submit" value="Cadastrar">
        </form>
          </div>
        </section>
	</body>
    
</html>