<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<link rel="stylesheet" href="css../table.css">
<?php
// Conectando ao banco de dados: 
include_once("conexao_situacao.php.php");
// Criando tabela e cabeçalho de dados:

   
 $sql = "SELECT * FROM usuarios";
 $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
 // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 {
   echo "<table>";
    $estadosBrasil =  $registro['estados_brasil'];
    $cidade = $registro['cidade'];
    $rua = $registro['rua'];
    $numero_casa = $registro['numero_casa'];
    
   
    echo "<tr>";
    echo "<th>ESTADO</th>";
    echo "<td>".$estadosBrasil."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>CIDADE</th>";
    echo "<td>".$cidade."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>RUA</th>";
    echo "<td>".$rua."</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Nº LOCAL</th>";
    echo "<td>".$numero_casa."</td>";
    echo "</tr>";
   
 }
 mysqli_close($conn);
 echo "</table>";
 ?>
 </body>
</html>