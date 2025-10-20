<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/geral.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/depoimentos.css">
    <link rel="stylesheet" href="./css/footer.css">
    <script src="./scripts/navHamb.js" defer></script>
    <?php include './includes/linkFont.php'?>
</head>
<body>
    <?php include './includes/header.php'?>

    <h2 id="titleDepoimentos">Nossas histórias de sucesso</h2>
    <p id="textDepoimentos">A prova de que a dedicação e o acompanhamento certo transformam vidas. Conheça as jornadas de quem confiou em nosso trabalho e alcançou resultados incríveis!</p>

    <?php include './includes/depoimentos/cardDepoimentos.php'?>

    <div id="evolucoes">

        <div class="cardEvolucoes">
            <img class="imgEvolucoes" src="./img/casosDeSucesso/evolucao1.png" alt="">
            <div class="titleTextEvo">
                <h3 class="titleEvolucoes">Joaquim Senna</h3>
                <p class="textEvolucoes">Cheguei desacreditado, com 18% de gordura e a meta de um físico de competição parecendo um sonho distante. Mas a cada treino, cada refeição, a transformação acontecia. Hoje, com 7% de gordura, olho para trás e vejo que cada sacrifício valeu a pena. Acredite no processo!</p>
            </div>
            
        </div>

        <div class="cardEvolucoes">
            <img class="imgEvolucoes" src="./img/casosDeSucesso/evolucao2.png" alt="">
            <div class="titleTextEvo">
                <h3 class="titleEvolucoes">Samanta Barreto</h3>
                <p class="textEvolucoes">Optei pelo pacote completo e não me arrependo! Em 8 meses emagreci mais de 18kg e hoje tenho um corpo que me orgulho!</p>
            </div>
        </div>

        <div class="cardEvolucoes">
            <img class="imgEvolucoes" src="./img/casosDeSucesso/evolucao4.png" alt="">
            <div class="titleTextEvo">
                <h3 class="titleEvolucoes">Mara Oliveira</h3>
                <p class="textEvolucoes">Através dos métodos aplicados, obtive mais do que apenas mudanças corporais, aumentei minha autoestima e disciplina. Não consigo me enxergar retornando ao que era no passado!</p>
            </div>
        </div>

    </div>

    <a id="linkDepoimentos" href="./planos.php">Faça parte do nosso time</a>

    <?php include './includes/footer.php'?>

</body>
</html>