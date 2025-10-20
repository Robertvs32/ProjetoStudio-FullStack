<?php

    try {
        $sql = "SELECT * FROM infos";

        $stmt = $pdo->query($sql);
        
        $informacoes = $stmt->fetch();
    } catch(PDOException $e){
        die("Erro ao buscar informacoes!");
    }
    
?>