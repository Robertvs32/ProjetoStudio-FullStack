<?php 
    require_once './backend/buscaInfos.php';
    $nome = $informacoes['nome'];
?>

<header>
    <a id="titleHeader" href="./index.php"><h1><?php echo $nome?></h1></a>
    <button id="btnHamb">
        <span class="lineHamb"></span>
        <span class="lineHamb"></span>
        <span class="lineHamb"></span>
    </button>
    <nav id="navHeader">
        <ul id="navUlHeader">
            <li class="navLiHeader"><a class="navLi_AHeader" href="./planos.php">Planos e serviços</a></li>
            <li class="navLiHeader"><a class="navLi_AHeader" href="./sobreNos.php">Sobre nós</a></li>
            <li class="navLiHeader"><a class="navLi_AHeader" href="./depoimentos.php">Depoimentos</a></li>
        </ul>
    </nav>
</header>
<nav class="navResponsiva">
    <ul id="navUlHeaderResponsive">
        <li class="navLiHeaderResponsive"><a class="navLi_AHeader" href="https://www.youtube.com/">Planos e serviços</a></li>
        <li class="navLiHeaderResponsive"><a class="navLi_AHeader" href="https://www.youtube.com/">Sobre nós</a></li>
        <li class="navLiHeaderResponsive"><a class="navLi_AHeader" href="https://www.youtube.com/">Depoimentos</a></li>
    </ul>
</nav>
<div id="paddingHeader"></div>

