<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> exercicio6 </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
 
    </head>
    <body>
        <form action="exercicio7.php" method="POST">
            <p id="taxa">
            Informe o valor da taxa:  <input type="number" step='0.01' name="taxa" />
            </p>
            <p id="valor">
                Informe o valor do produto:  <input type="number" step='0.01' name="valor"  />
            </p>
            <p id="tempo">
                tempo de atraso:  <input type="number" name="tempo"  />
            </p>
    
<input type="submit" value="Calcular" name='calc' id="calc">
        </form>
    </body>
</html>