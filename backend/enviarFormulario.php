<?php
    require_once './conexaodb.php';
    header('Content-Type: application/json');

    try {
        $dadosRecebidos = json_decode(file_get_contents('php://input'), true);

        if ($dadosRecebidos === null) {
            http_response_code(400);
            echo json_encode(['status' => 'erro', 'mensagem' => 'JSON inválido ou vazio.']);
            exit;
        }

        $nome_completo = $dadosRecebidos['nome_completo'] ?? 'indefinido';
        $cpf = $dadosRecebidos['cpf'] ?? 'indefinido';
        $endereco = $dadosRecebidos['endereco'] ?? 'indefinido';
        $contato_whatsapp = $dadosRecebidos['contato_whatsapp'] ?? 'indefinido'; 
        $peso = $dadosRecebidos['peso'] || 'indefinido';
        $altura = $dadosRecebidos['altura'] ?? 'indefinido';
        $sexo = $dadosRecebidos['sexo'] ?? 'indefinido';
        $plano = $dadosRecebidos['plano'] ?? 'indefinido';
        $numero_cartao = $dadosRecebidos['numero_cartao'] ?? 'indefinido';
        $validade = $dadosRecebidos['validade'] ?? 'indefinido';
        $cvv = $dadosRecebidos['cvv'] ?? 'indefinido';
        $nome_cartao = $dadosRecebidos['nome_cartao'] ?? 'indefinido';


        $sql = "INSERT INTO alunos_cadastrados(
            nome_completo, 
            cpf, 
            endereco, 
            contato_whatsapp, 
            peso, 
            altura, 
            sexo, 
            plano, 
            numero_cartao, 
            validade, 
            cvv, 
            nome_cartao
        ) 
        values(
            :nome_completo, 
            :cpf, 
            :endereco, 
            :contato_whatsapp,
            :peso, 
            :altura, 
            :sexo, 
            :plano, 
            :numero_cartao, 
            :validade, 
            :cvv, 
            :nome_cartao
        )";

        $stmt = $pdo->prepare($sql);

        $stmt->bindValue('nome_completo', $nome_completo);
        $stmt->bindValue('cpf', $cpf);
        $stmt->bindValue('endereco', $endereco);
        $stmt->bindValue('contato_whatsapp', $contato_whatsapp);
        $stmt->bindValue('peso', $peso);
        $stmt->bindValue('altura', $altura);
        $stmt->bindValue('sexo', $sexo);
        $stmt->bindValue('plano', $plano);
        $stmt->bindValue('numero_cartao', $numero_cartao);
        $stmt->bindValue('validade', $validade);
        $stmt->bindValue('cvv', $cvv);
        $stmt->bindValue('nome_cartao', $nome_cartao);

        $stmt->execute();

        echo json_encode(['status' => 'sucesso', 'mensagem' => 'Cadastro realizado com sucesso!']);

    } catch(PDOException $e){
        http_response_code(500);
        echo json_encode(['status' => 'erro', 'mensagem' => 'Erro ao enviar cadastro: ' . $e->getMessage()]);
    }
?>