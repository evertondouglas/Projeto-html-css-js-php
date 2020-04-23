
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Login - PHP + MySQL</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="css/menu-style.css">
</head>

<body>        
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Sistema de Login</h3>
                    <h3 class="title has-text-grey">Zer@ Dengue</h3>
                    <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                    <div class="box">
                        <form action="validar-login.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="usuario" name="text" class="input is-large" placeholder="Seu usuário" autofocus="">
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input name="senha" class="input is-large" type="password" placeholder="Sua senha">
                                </div>
                            </div>

                            <div class="field">
                                <a href="menu-cadastro-usuario.php">Cadastrar</a>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
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