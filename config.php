<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'sitecliente';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// ! TESTANDO: teste de conexão
// if ($conexao->connect_errno) {
//     echo "error";
// } else {
//     echo "Conexão efetuada com sucesso!";
// }

?>