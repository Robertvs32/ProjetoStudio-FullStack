    <?php require_once './backend/conexaodb.php';?>

    <?php 
        require_once './backend/buscaInfos.php';
        $nome = $informacoes['nome'];
        $instagram = $informacoes['link_instagram'];
        $youtube = $informacoes['link_youtube'];
        $tiktok = $informacoes['link_tiktok'];
    ?>

    <!DOCTYPE html>
    <html lang="pt-br">
        <?php include './includes/index/headIndex.php'?>
    <body>
        <?php include './includes/header.php'?>
        <?php include './includes/index/banner.php'?>
        <?php include './includes/index/instalacoes.php'?>
        <?php include './includes/index/servicos.php'?>
        <?php include './includes/index/casosSucesso.php'?>
        <?php include './includes/footer.php'?>
    </body>
    </html>