<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="css../css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css../menu-style.css">
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
                    <li><a href="login.php">login</a></li>
                    <li><a href="login-adm.php">Área Administrativa</a></li>             
                </ul>
          </nav>
          <nav class="mobile ">
          <div class="btn-menu "><i class="fas fa-bars"></i></div>
            <div class="remove">
                <ul class="mobileUL">
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Produto</a></li>
                    <li><a href="#">Contato</a></li>
                    <li><a href="login.php">login</a></li>
                    <li><a href="login-adm.php">Área Administrativa</a></li>             
                </ul>
            </div>
          </nav>
        
         
</header>


        <h1>Lista de Casos Suspeitos do Mosquito Aedes Aegypti</h1>
       
        
        <section class="flex">
            <?php
            include ("consulta.php");
            ?>
        </section>
        <script src="js/btn-menu.js"></script>
</body>
</html>