<!DOCTYPE html>
<html lang="pt-br">
    <?php include './includes/formulario/headForm.php'?>
<body>
    <?php include './includes/header.php'?>
    
    <div id="containerForm">
        <h1 id="titleForm" >Dados do aluno</h1>

        <form id="form" action="./processarCadastro.php" method="post">

            <label for="nome">Nome completo</label>
            <input id="nome" name="nome" class="inputForm" type="text">

            <label for="cpf">CPF</label>
            <input id="cpf" name="cpf" class="inputForm" type="text">

            <label for="endereco">Endereço</label>
            <input id="endereco" name="endereco" class="inputForm" type="text">

            <label for="contato">Contato (Whatsapp)</label>
            <input id="contato" name="contato" class="inputForm" type="text">

            <label for="peso">Peso (kg)</label>
            <input id="peso" name="peso" class="inputForm" type="text">

            <label for="altura">Altura (metros)</label>
            <input id="altura" name="altura" class="inputForm" type="text">

            <select id="sexo" name="sexo" >
                <option value="" selected disabled>Selecione o sexo</option>
                <option value="Masculino">Masculino</option>
                <option value="Masculino">Feminino</option>
            </select>

            <select id="planoEscolhido" name="planoEscolhido" >
                <option value="" selected disabled>Selecione o plano</option>

                <optgroup label="Acesso ao maquinário">
                    <option value="mensalMaquinario">Mensal - R$ 00,00</option>
                    <option value="trimestralMaquinario">Trimestral - R$ 00,00</option>
                    <option value="semestralMaquinario">Semestral - R$ 00,00</option>
                </optgroup>

                <optgroup label="Acompanhameno alimentar">
                    <option value="mensalAlimentar">Mensal - R$ 00,00</option>
                    <option value="trimestralAlimentar">Trimestral - R$ 00,00</option>
                    <option value="semestralAlimentar">Semestral - R$ 00,00</option>
                </optgroup>

                <optgroup label="Protocolo de treino">
                    <option value="mensalTreino">Mensal - R$ 00,00</option>
                    <option value="trimestralTreino">Trimestral - R$ 00,00</option>
                    <option value="semestralTreino">Semestral - R$ 00,00</option>
                </optgroup>
            </select>

            <h2 id="titleCartao">Dados do Cartão de crédito/débito</h2>

            <label for="cartao">Numero do cartao</label>
            <input id="cartao" name="cartao" class="inputForm" type="text" maxlength="16">

            <label for="validade">Validade</label>
            <input id="validade" name="validade" class="inputForm" type="text">

            <label for="cvv">CVV</label>
            <input id="cvv" name="cvv" class="inputForm" type="text" maxlength="3">

            <label for="nomeCartao">Nome impresso no cartão</label>
            <input id="nomeCartao" name="nomeCartao" class="inputForm" type="text">

            <div id="btns">
                <button class="btnForm" type="submit" >Confirmar cadastro</button>
                <button class="btnForm" type="reset">Limpar</button>
            </div>

        </form>

    </div>


</body>
</html>