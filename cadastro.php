<?php
session_start();
?>
<!DOCTYPE html>

<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro - PHP + MySQL</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script>
        function formatar(mascara, documento){
        var i = documento.value.length;
        var saida = mascara.substring(0,1);
        var texto = mascara.substring(i)
    
        if (texto.substring(0,1) != saida){
                    documento.value += texto.substring(0,1);
        }
        
        }
</script>
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Cadastro</h3>
                    <h3 class="title has-text-grey">Zer@ Dengue</h3>
                    <?php
                    if($_SESSION['status_cadastro']):
                    ?>
                    <div class="notification is-success">
                      <p>Cadastro efetuado!</p>
                      <p>Faça login informando o seu usuário e senha <a href="login.php">aqui</a></p>
                    </div>
                    <?php
                        endif;
                        unset($_SESSION['status_cadastro']);
                    ?>
                    
                    <div class="box">
                        <form action="cadastrar.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="nome" type="text" class="input is-large" placeholder="Nome Completo" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" type="text" class="input is-large" placeholder="Usuário">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="cpf" type="text" class="input is-large" maxlength="14" placeholder="CPF" OnKeyPress="formatar('###.###.###-##', this)" >
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="telefone" type="text" class="input is-large" maxlength="12" OnKeyPress="formatar('##-####-####', this)" placeholder="Telefone">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="email" type="text" class="input is-large" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="endereco" type="text" class="input is-large" placeholder="Endereco">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="dataNasc" type="text" class="input is-large" maxlength="10" OnKeyPress="formatar('##/##/####', this)" placeholder="Data de nascimento">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="escolaridade" type="text" class="input is-large" placeholder="Escolaridade">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Senha">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="js/jquery.js"></script>
        <script scr="js/menu-btn-mobile.js"></script>
    <script>
        $(function(){
            $('nav.mobile').click(function(){
                const listaMenu = $('nav.mobile ul');
                if(listaMenu.is(':hidden')==true){
                    const icon = $('.btn-menu').find('i');
                    icon.removeClass('fa-bars');
                    icon.addClass('fa-times');
                    listaMenu.slideToggle();}
                else{
                    const icon = $('.btn-menu').find('i');
                    icon.removeClass('fa-times');
                    icon.addClass('fa-bars');
                    listaMenu.slideToggle();}
            });
        });
        </script>
</body>

</html>