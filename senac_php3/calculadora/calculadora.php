
<?php

$num1 = 0;
$num2 = 0;
$resultado = 0;
$calcular = 'somar';

if(isset($_GET['num1'], $_GET ['num2'], $_GET ['calcular'])){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $calcular = $_GET ['calcular'];


switch($calcular){

    case 'somar';
    $resultado = $num1 + $num2;
    break;

    case 'subtrair';
    $resultado = $num1 - $num2;
    break;

    case 'multiplicar';
    $resultado = $num1 * $num2;
    break;

    case 'dividir';
    $resultado = $num1 / $num2;
    break;
}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova calculadora</title>
</head>


<style> 

.body{
    background-color: darkgrey; 
}

.form{

    background-color: black;
    border-radius:30px;
    margin-left: 350px;
    margin-right:350px;
    text-align: center;
    justify-content: center;
    align-items: center;
    padding: 30px;
    font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 
    'Open Sans', 'Helvetica Neue', sans-serif;
    color: white;

}

.inputs{
    padding: 5px;
    border-radius: 5px;
}



</style>

<body class="body">

    <div class="form">
    <h3> Entre com os valores</h3>
    <form>
        <input type="number" class="inputs" name="num1"  required/>
        <br/>
        <br/>
        <input type="number" class="inputs" name="num2" required/>
        <br/>
        <br/>
        <h4>Escolha a Operação</h4>    
            
            <select name="calcular">
                <option value="somar"> Soma </option>
                <option value="subtrair"> Subtração </option>
                <option value="multiplicar"> Multiplicação </option>
                <option value="dividir"> Divisão </option>
            </select>
        <br/>
        <br/>
        <input type="submit" value="CALCULAR"/>
        <br/>
        <br/>
        <p>O resultado é <?= $resultado?></p>

    </form>

</body>
</html>