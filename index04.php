<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>questao04</title>
</head>
<body>

    <?php
    $nome = "laysa";
    $salario_fixo = 1500;
    $total_vendas = 200; 
    $comissao = $total_vendas * 0.15;
    $salario_final = $salario_fixo + $comissao;
    echo "Nome:" .$nome ."\n";
    echo "Salário fixo:" .$salario_fixo ."\n";
    echo "Salário final (com comissão):" .$salario_final;
    ?> 

</body>
</html>
