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


<h2 id="titleInfos">INFORMAÇÕES</h2>

<div id="infos">

    <div class="cardInfo">
        <img class="imgInfo" src="./img/cardInfos/relogio.png" alt="">
        <h3 class="subtitleInfo">Horarios</h3>
        <p class="textInfo">Segunda a sexta: <?php echo $entrada_segSex?> - <?php echo $saida_segSex?></p>
        <p class="textInfo">Sábado, domingo e feriados: <?php echo $entrada_fimSem?> - <?php echo $saida_fimSem?></p>
    </div>

    <div class="cardInfo">
        <img class="imgInfo" src="./img/cardInfos/contatos.png" alt="">
        <h3 class="subtitleInfo">Contatos</h3>
        <p class="textInfo">Telefone - <?php echo $telefone?></p>
        <p class="textInfo">Celular - <?php echo $celular?></p>
        <p class="textInfo">Email - <?php echo $email?></p>
    </div>

    <div class="cardInfo">
        <img class="imgInfo" src="./img/cardInfos/mapa.png" alt="">
        <h3 class="subtitleInfo">Localização</h3>
        <p class="textInfo"><?php echo $endereco?></p>
        <p class="textInfo"></p>
    </div>

</div>