<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ler um registro</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>
    
<div class="container">

<div class="pageheader">

<h1>  ler produto</h1>

<?php

use function PHPSTORM_META\type;

   if (isset($_GET['id'])) {
       // O parâmetro 'id' está presente na URL
       $id = $_GET['id'];
       echo "Presente na url";
       // Pode-se realizar processamento adicional ou ações com $id
   } else {
           echo "Não está presente na url.";
       // O parâmetro 'id' não está presente na URL
       // Lidar com o caso em que 'id' não é fornecido
   }
   include 'bancodedados.php';
   try {
    $query= "select id nome,descricao,preco FROM produtos WHERE id=? LIMIT 1;";

   }
   catch(PDOException $exception){
    die(  "Não está presente na url.".$exception->getMessage());
   }
   $query
   
   ?>

</div>
</div>















<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>