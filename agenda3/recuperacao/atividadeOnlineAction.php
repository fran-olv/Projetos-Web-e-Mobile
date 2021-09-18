<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Promoção</title>
</head>

<body>
    <div class="w3-container w3-teal">
        <h2>PROMOÇÃO DE MÊS DE ANIVERSÁRIO</h2>
    </div>
    
    <?php
    
    echo $_POST['txtNome']."! <br>" ;
    echo "Valor da Compra sem Desconto: R$ ".$_POST['txtValorCompra']."<br>";
    echo "Forma de Pagamento Escolhida: ".$_POST['cmbPag']."<br>";
    

    switch ($_POST['cmbPag']) {
        case 'deposito':
            $porcDesco=10;
            break;
        case 'boleto':
            $porcDesco=8;
            break;

        default:
        $porcDesco=0;
        break;
    }
    echo "Desconto de: ".$porcDesco."% <br>"; 
        $desconto=$_POST['txtValorCompra']*$porcDesco/100;
    echo "Você economizou: R$".$desconto."<br>";
        $paga= $_POST['txtValorCompra'] - $desconto;
    echo "Valor à pagar: R$".$paga."<br>";
 

    ?>

</body>

</html>