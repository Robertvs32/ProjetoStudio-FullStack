<?php require_once './backend/conexaodb.php';?>

<?php 
    require_once './backend/buscarValoresPlanos.php';

    $maquinario_mensal = $valores[0]['valor'];
    $maquinario_trimestral = $valores[1]['valor'];
    $maquinario_semestral = $valores[2]['valor'];
    $dieta_mensal = $valores[3]['valor'];
    $dieta_trimestral = $valores[4]['valor'];
    $dieta_semestral = $valores[5]['valor'];
    $treino_mensal = $valores[6]['valor'];
    $treino_trimestral = $valores[7]['valor'];
    $treino_semestral = $valores[8]['valor'];
    $promocional_mensal = $valores[9]['valor'];
    $promocional_trimestral = $valores[10]['valor'];
    $promocional_semestral = $valores[11]['valor'];
?>

<?php 
    require_once './backend/buscaInfos.php';
    $nome = $informacoes['nome'];
    $instagram = $informacoes['link_instagram'];
    $youtube = $informacoes['link_youtube'];
    $tiktok = $informacoes['link_tiktok'];
?>

<!DOCTYPE html>
<html lang="pt-br">
    <?php include './includes/formulario/headForm.php'?>
<body>
    <?php include './includes/header.php'?>
    
    <div id="containerForm">
        <h1 id="titleForm" >Dados do aluno</h1>

        <form id="form">

            <label for="nome">Nome completo</label>
            <input id="nome" name="nome_completo" class="inputForm" type="text">

            <label for="cpf">CPF</label>
            <input id="cpf" name="cpf" class="inputForm" type="text">

            <label for="endereco">Endereço</label>
            <input id="endereco" name="endereco" class="inputForm" type="text">

            <label for="contato">Contato (Whatsapp)</label>
            <input id="contato" name="contato_whatsapp" class="inputForm" type="text">

            <label for="peso">Peso (kg)</label>
            <input id="peso" name="peso" class="inputForm" type="text">

            <label for="altura">Altura (metros)</label>
            <input id="altura" name="altura" class="inputForm" type="text">

            <select id="sexo" name="sexo" >
                <option value="" selected disabled>Selecione o sexo</option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
            </select>

            <select id="plano" name="plano" >
                <option value="" selected disabled>Selecione o plano</option>

                <optgroup label="Acesso ao maquinário">
                    <option value="1">Mensal - R$ <?php echo $maquinario_mensal?></option>
                    <option value="2">Trimestral - R$ <?php echo $maquinario_trimestral?></option>
                    <option value="3">Semestral - R$ <?php echo $maquinario_semestral?></option>
                </optgroup>

                <optgroup label="Acompanhameno alimentar">
                    <option value="4">Mensal - R$ <?php echo $dieta_mensal?></option>
                    <option value="5">Trimestral - R$ <?php echo $dieta_trimestral?></option>
                    <option value="6">Semestral - R$ <?php echo $dieta_semestral?></option>
                </optgroup>

                <optgroup label="Protocolo de treino">
                    <option value="7">Mensal - R$ <?php echo $treino_mensal?></option>
                    <option value="8">Trimestral - R$ <?php echo $treino_trimestral?></option>
                    <option value="9">Semestral - R$ <?php echo $treino_semestral?></option>
                </optgroup>

                <optgroup label="Pacote promocional">
                    <option value="10">Mensal - R$ <?php echo $promocional_mensal?></option>
                    <option value="11">Trimestral - R$ <?php echo $promocional_trimestral?></option>
                    <option value="12">Semestral - R$ <?php echo $promocional_semestral?></option>
                </optgroup>
            </select>

            <h2 id="titleCartao">Dados do Cartão de crédito/débito</h2>

            <label for="cartao">Numero do cartao</label>
            <input id="cartao" name="numero_cartao" class="inputForm" type="text" maxlength="16">

            <label for="validade">Validade</label>
            <input id="validade" name="validade" class="inputForm" type="text">

            <label for="cvv">CVV</label>
            <input id="cvv" name="cvv" class="inputForm" type="text" maxlength="3">

            <label for="nomeCartao">Nome impresso no cartão</label>
            <input id="nomeCartao" name="nome_cartao" class="inputForm" type="text">

            <div id="btns">
                <button class="btnForm" type="submit" >Confirmar cadastro</button>
                <button class="btnForm" type="reset">Limpar</button>
            </div>

        </form>

    </div>

    <?php include './includes/footer.php'?>

</body>
</html>