<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tac+One&display=swap" rel="stylesheet">
    <?php 

       $texto = $_GET["texto"];
       $tamanho = $_GET["tamanho"];
       $cor = $_GET["cor"];
       $textoa = $_GET["textoa"];
       $aff = $_GET["aff"];
       $ach = $_GET["ach"];

?>


<style>


    span.texto{

        font-size: <?php echo $tamanho; ?>;
        color: <?php echo $cor; ?>;

        font-family: <?php echo $textoa; ?>;
        background-color: <?php echo $aff ?>;
        font-size: <?php echo $ach ?>;
    
    }
</style>
</head>
<body>

<h1></h1>

<?php

    echo "<span class='texto'> $texto </span>"


?>

<a href="cores.html">Voltar</a>
    


</body>
</html>