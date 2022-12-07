<?php

//CRIAÇÃO DE TTOKEN JWT (QUE SERÁ REUTILIZADO NO FUTURO)

function base64UrlEncode($data){
    return str_replace(['+', '/', '='], ['-', '_', ''], base64_Encode($data));
}

//CABEÇALHO
$header = base64UrlEncode('{"alg":"HS256", "typ": "JWT"}');

// VARIÁVEL QUE ARMAZENARÁ DADOS DO USUÁRIO (LOGIN, SENHA, CHAVE PIX)
$payload = base64UrlEncode(
    '{
        "sub":"' .md5(time()). '", 
        "name": "João Pedro", 
        "iat": '.time().'
    }'
    );

//ASSINATURA
$signature = base64UrlEncode(
    hash_hmac('sha256', $header. '.' .$payload, 'confirma', true)

    );

echo $header. '.' .$payload.'.'.$signature;

?>


