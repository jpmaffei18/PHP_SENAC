<?php

if(isset($_POST['submit'])) {

include_once('config.php');

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];

$result = mysqli_query($conexao, "INSERT INTO cadastro(nome, telefone) values('$nome', '$telefone')");

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA DE SEXTA</title>
     

  <form action="index.php" method="POST">
    <div>
      <fieldset>
        <legend>Formulário</legend>
        <label>Cadastrar</label>
        <br>
        
        <br>
        <label>Nome</label>
        <input type="text" name="nome" id="nome" class="nome"/>
        <br>
        <br>
        <label>Telefone</label>
        <input type="number" name="telefone" id="telefone"/>

        <input type="submit" name="submit" id="submit"/>
      </fieldset>
    </div>
  </form>
  

  
</head>
<body>
    
</body>
</html>
