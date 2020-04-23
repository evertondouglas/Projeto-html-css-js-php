<?php
session_start();
include('verifica_login.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="css../css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/menu-style.css">
    <style>
       
    </style>
   
</head>
<body>
<header class="header">
          <div class="logo left"><a href="index.php">Logo</a></div>
          <nav class="desktop right">
                <ul>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Produto</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="menu-login-usuario.php">login</a></li>
                    <li><a href="menu-login-adm.php">Área Administrativa</a></li>             
                </ul>
          </nav>
          <nav class="mobile">
          <div class="btn-menu ">
            <i class="fas fa-bars"></i>
          </div>
                <ul>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Produto</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="menu-login-usuario.php">login</a></li>
                    <li><a href="menu-login-adm.php">Área Administrativa</a></li>             
                </ul>
            </div>
          </nav>
        
         
</header>


        <h1>Lista de Casos Suspeitos do Mosquito Aedes Aegypti</h1>
       
        
        <section class="fle">
            <?php
            include ("situacao.php");
            ?>
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
</html>
