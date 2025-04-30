<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questao09</title>
</head>
<body>
    <?php
    $deposito = 200;
    $juros = 0.007; 
    $rendimento = $deposito * (1 + $juros);
    echo "Valor com rendimento após um mês: R$ " . $rendimento;
    ?>

</body>
</html>
