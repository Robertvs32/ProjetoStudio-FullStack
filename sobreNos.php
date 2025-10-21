<?php require_once './backend/conexaodb.php';?>

<?php 
    require_once './backend/buscaInfos.php';

    $entrada_segSex = $informacoes['horario_ent_seg_sex'];
    $saida_segSex = $informacoes['horario_ent_seg_sex'];

    $entrada_fimSem = $informacoes['horario_ent_sab_dom'];
    $saida_fimSem = $informacoes['horario_sai_sab_dom'];

    $historia = $informacoes['historia'];

    $telefone = $informacoes['telefone'];
    $celular = $informacoes['celular'];
    $email = $informacoes['email'];

    $endereco = $informacoes['localizacao'];
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
    <?php include './includes/sobreNos/headSobreNos.php'?>
<body>
    <?php include './includes/header.php'?>
    <?php include './includes/sobreNos/nossaHistoria.php'?>
    <?php include './includes/sobreNos/cardInfos.php'?>
    <?php include './includes/footer.php'?>
    
</body>
</html>