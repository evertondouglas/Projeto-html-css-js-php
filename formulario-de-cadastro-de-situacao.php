<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Cadastro para controle</h2>
    <?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
            <div class="box">
                        <form action="validar-formulario-situacao.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="rua" type="text" class="input is-large" placeholder="Rua" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="numeroCasa" type="number" class="input is-large" placeholder="Número">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="bairro" type="text" class="input is-large" maxlength="14" placeholder="Bairro" >
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="municipio" type="text" class="input is-large" maxlength="12" placeholder="Município">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <select name="estados_brasil">
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
                                    </select>                             
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                 <label for="">Tipo de Zona</label><br>
                                    <input type="radio" name="zona" value="urbana">
                                    <label for="urbana">Zona Urbana</label><br>
                                    <input type="radio"  name="zona" value="rural">
                                    <label for="rural">Zona Rural</label><br>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                <label for="">Tipo de Residência</label><br>
                                    <input type="radio" name="residencia" value="residencial">
                                    <label for="residencial">Residencial</label><br>
                                    <input type="radio"  name="residencia" value="comercial">
                                    <label for="comercial">Comercial</label><br>
                                    <input type="radio"  name="residencia" value="industrial">
                                    <label for="industrial">Industrial</label><br>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                <label for="">Tipo de Terreno</label><br>
                                    <input type="radio" name="terreno" value="vazio">
                                    <label for="vazio">Terreno Vazio</label><br>
                                    <input type="radio"  name="terreno" value="terria">
                                    <label for="terria">Edificação Térria</label><br>
                                    <input type="radio"  name="terreno" value="Alta">
                                    <label for="alta">Edificação Alta</label><br>
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                        </form>
            
        </div>
    
</body>
</html>