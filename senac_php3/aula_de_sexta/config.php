<?php

$conexao = new mysqli('localhost:3306', 'root', '', 'auladesexta');

if($conexao->connect_errno)
{
    echo "Tem alguma coisa errada";
}
else {
    echo "Conexão bem sucedida";
}


?>