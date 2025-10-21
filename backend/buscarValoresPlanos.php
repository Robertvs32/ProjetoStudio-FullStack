<?php
     
    try {
        require_once './backend/conexaodb.php';
        $sql = "SELECT id, valor FROM opcoes_planos";
        $stmt = $pdo->query($sql);
        $valores = $stmt->fetchAll();

    } catch(PDOException $e){
        die("Erro ao buscar informacoes!");
    }

?>