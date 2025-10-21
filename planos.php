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
    <?php include './includes/planos/headPlanos.php'?>
<body>
    <?php include './includes/header.php'?>

    <?php include './includes/planos/maquinario.php'?>
    <?php include './includes/planos/dieta.php'?>
    <?php include './includes/planos/treino.php'?>
    <?php include './includes/planos/pacotePromocional.php'?>
    
    <?php include './includes/footer.php'?>
</body>
</html>