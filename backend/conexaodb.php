<?php

    $host = 'localhost';
    $user = 'root';
    $senha = '';
    $db = 'acaddb';

    $dsn = "mysql:host=$host;dbname=$db;charset=utf8";

    try {
        $pdo = new PDO($dsn, $user, $senha);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch(PDOException $e){
        die("Erro ao estebelecer conexao com o banco de dados: " . $e->getMessage());
    }

?>