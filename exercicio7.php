
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> exercicio7 </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
   
    </head>
    <body>
    <?php
        $taxa = $_POST['taxa'];
        $tempo = $_POST['tempo'];
        $valor = $_POST['valor'];

        $prestacao =  $valor + ($valor * ($taxa / 100) *  $tempo);

        echo "Resultado da média é: " .$prestacao;

?>
    </body>
</html>