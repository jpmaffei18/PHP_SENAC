<?php

$conexao = new mysqli('localhost:3306', 'root', '', 'lista_de_times');

if($conexao->connect_errno)
{
    echo "Tem alguma coisa errada";
}
else {
    echo "Conexão bem sucedida";
}

?>