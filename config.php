<?php
$servidor = "localhost";
$usuario = "root";
$senha = "root";
$banco = "ex6";

try {
    $pdo = new PDO("mysql:host={$servidor};dbname={$banco};port=8889;charset=utf8;",$usuario,$senha);
} catch (Exception $e) {
    echo "<p>Erro ao tentar se conectar</p>";
    echo $e->getMessage();
}