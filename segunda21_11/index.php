<?php


if(isset($_POST['submit'])) {

require('config.php');

$nome_do_time = $_POST['nome_do_time'];
$cidade_do_time = $_POST['cidade_do_time'];

$result = mysqli_query($conexao, "INSERT INTO Times(nome_do_time,cidade_do_time) values('$nome_do_time', '$cidade_do_time')");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03</title>
</head>
<body>
  
<style>
.lista-de-times{
    background-color: black;
    color: #fff;
}

.titulo{
    font-size: 20px;
    color: #fff;
}

legend{
font-size: 25px;
font-weight: bolder;
}
</style>

<form action="index.php" method="POST">
<div class="lista-de-times">
     
    <label>Cidade do Time</label>
    <input type="text" name ="cidade_do_time" id="cidade_do_time" class="cidade_do_time"/>
    <br>
    <br>
    <input type="submit" name="submit" id="submit" class="submit" a href="https://pt.wikipedia.org/wiki/Clube_de_Regatas_do_Flamengo"/ >
</fieldset>
</div>
</form>

</body>
</html>