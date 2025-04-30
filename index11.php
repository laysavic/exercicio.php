<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questao11</title>
</head>
<body>
    <?php
    $custo = 600;
    $percentual = 5;
    $valor_venda = $custo * (1 + $percentual / 100);
    echo "Preço de venda: R$ " . $valor_venda;
    ?>

</body>
</html>