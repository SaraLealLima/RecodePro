<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link href="styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT&display=swap" rel="stylesheet">
    <script src="script.js"></script>
    <title>Nossas Lojas</title>
</head>

<body>

    <?php
        include('./components/header.html')
    ?>


    <div class="texto-padrao">
        <p id="titulo">NOSSAS LOJAS</p>
        <p> Saiba onde nos encontrar! Venha
            até uma de nossas lojas para ver
            os modelos disponíveis e até mesmo prova-los. Nossa equipe te receberá com muito carinho e fará sua visita
            ser
            incrível!</p>
    </div>
     </br>

    <section class="nossas-lojas">

        <div class="loja">
            <p> SÃO PAULO</p>
            <p>Rua Oscar Freire, 800</br>
                Cerqueira César </br>
                CEP: 01426-002 </br>
                São Paulo - SP </p>
        </div>
        <div class="loja">
            <p> RIO DE JANEIRO</p>
            <p>Rua Duvivier, 20 </br>
                Copacabana</br>
                CEP: 22020-020 </br>
                Rio de Janeiro, RJ </p>
        </div>
        <div class="loja">
            <p> BELO HORIZONTE</p>
            <p>Rua Professor Moraes, 610</br>
                Savassi</br>
                CEP: 30150-370 </br>
                Belo Horizonte, MG</p>
        </div>
        <div class="loja">
            <p> FLORIANÓPOLIS</p>
            <p>Rua Madalena Barbi, 180</br>
                Centro </br>
                CEP: 88015-190 </br>
                Florianópolis, SC </p>
        </div>

    </section>

    <?php
        include('./components/footer.html')
    ?>

</body>