<?php

/**
 * Segurança com senhas
 * function password_hash
 * function password_verify
 * 
 * Algoritimos suportados: PASSWORD_DEFAULT, PASSWORD_BCRYPT, PASSWORD_ARGON2I;
 */

$password = "php";
$passHash = password_hash($password, PASSWORD_BCRYPT);

echo $passHash;

$verify = password_verify($password, $passHash);

if($verify){
    echo "Senha correta";
}else{
    echo "Senha incorreta";
}