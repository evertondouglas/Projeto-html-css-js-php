<?php
session_start();
include('verifica_login.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="general-style.css">
    <style>.menu li.name b{ color: #FE5F55;}}</style>
    
</head>
<body>
     <header class="header">
        <a href="index.php">Logo</a>
          <nav>
            <ul class="menu">
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Produto</a></li>
                <li><a href="#">Contato</a></li>
                <li class="name"><a href=""> <b> Olá, <?php echo $_SESSION['nome'];?></b> </a></li>
                <li><a href="logout.php"> <b> Sair </b> </a></li>
            </ul>
          </nav>
    </header>  

<?php include('situacao.php'); ?>  
    
</body>
</html>
