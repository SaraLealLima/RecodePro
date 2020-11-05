<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT&display=swap" rel="stylesheet">
    <script src="script.js"></script>
    <title>Nossas Lojas</title>
</head>

<body>

    <?php
        include('./components/header.html')
    ?>

            <div class="container mb-5 mt-5 w-75">
                <div class="alert alert-danger" role="alert">
                    <strong>Atenção</strong>, nossas lojas estão temporariamente fechadas devido a pandemia do COVID-19, 
                    para manter nossos fucionários e suas famílias em segurança.
                </div>
            </div>

    <div class="texto-padrao container ml-sm-0 ml-md-5 mt-5">
        <p id="titulo">NOSSAS LOJAS</p>
        <p> Saiba onde nos encontrar! Venha
            até uma de nossas lojas para ver
            os modelos disponíveis e até mesmo prova-los. Nossa equipe te receberá com muito carinho e fará sua visita
            ser
            incrível!</p>
    </div>
     </br>

    <section class="nossas-lojas container-fluid">
        <div class="row">
            <!-- <div class="col-sm-3 col-md-3 col-lg-6"> -->
                <div class="loja col-sm-3 col-md-3 col-lg-3 mb-5">
                    <p> SÃO PAULO</p>
                    <p>Rua Oscar Freire, 800</br>
                        Cerqueira César </br>
                        CEP: 01426-002 </br>
                        São Paulo - SP </p>
                </div>
                <div class="loja col-sm-3 col-md-3 col-lg-3 mb-5">
                    <p> RIO DE JANEIRO</p>
                    <p>Rua Duvivier, 20 </br>
                        Copacabana</br>
                        CEP: 22020-020 </br>
                        Rio de Janeiro, RJ </p>
                </div>
                <div class="loja col-sm-3 col-md-3 col-lg-3 mb-5">
                    <p> BELO HORIZONTE</p>
                    <p>Rua Professor Moraes, 610</br>
                        Savassi</br>
                        CEP: 30150-370 </br>
                        Belo Horizonte, MG</p>
                </div>
                <div class="loja col-sm-3 col-md-3 col-lg-3 mb-5">
                    <p> FLORIANÓPOLIS</p>
                    <p>Rua Madalena Barbi, 180</br>
                        Centro </br>
                        CEP: 88015-190 </br>
                        Florianópolis, SC </p>
                 </div>
            <!-- </div> -->
        </div>

        

    </section>

    <?php
        include('./components/footer.html')
    ?>

</body>