<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questao06</title>
</head>
<body>
    <?php
    $valor_a = 4;
    $valor_b = 6;

    list($valor_a, $valor_b) = array($valor_b, $valor_a);
    echo "Valor de A: $valor_a";
    echo " Valor de B: $valor_b";
    ?>
  
</body>
</html>
