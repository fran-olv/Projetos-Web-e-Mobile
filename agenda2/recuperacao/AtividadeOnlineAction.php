<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta http-equiv="X-UA-Compatible" content="ie=edge"> 
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
<title>Cadastro Realizado com Sucesso</title> 
</head> 

<body> 
<div class="w3-container w3-teal">
        <h2>Cadastro Confirmado com Sucesso</h2>
    </div>
<div class="w3-container w3-teal"> 
<?php
$nome = $_POST['txtNome'] ;
$sobrenome = $_POST['txtSobrenome'];
$email = $_POST['txtEmail'];
$formacao =  $_POST['txtFormacao'];
$ult_emprego = $_POST['txtEmprego'];

echo "Nome: ".$nome."<br>" ;
echo "Sobrenome: ".$sobrenome."<br>";
echo "Email: ".$email."<br>";
echo "Formação: ".$formacao."<br>";
echo "Descrição do Último Emprego: ".$ult_emprego."<br>";
?> 
</div> 
</body> 
</html> 