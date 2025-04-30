<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questao12</title>
</head>
<body>
    <?php
    $custo_fabrica = 60000;
    $impostos = 0.45; 
    $distribuidor = 0.28; 
    $custo_consumidor = $custo_fabrica * (1 + $impostos) * (1 + $distribuidor);
    echo "Custo ao consumidor: R$ " . $custo_consumidor;
    ?>

</body>
</html>