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

    <?php 
        require('connection.php');
    ?>

    <title>Produtos</title>
</head>

<body>

    <?php 
        include('./components/header.html')
    ?>


    <div class="texto-padrao container ml-sm-0 ml-md-5 mt-5">
        <p id="titulo">NOSSOS PRODUTOS</p>
        <p> Confira nossas incríveis jóias, todas trabalhadas no
            mais exigente padrão de qualidade, elaboradas com cuidado e elegância. </br>
            Aproveite pois estamos no nosso mês de aniversário, <strong> todas as jóias com descontos imperdíveis!</strong>
        </p>
    </div>

        </br>

        <div class="container mb-5 w-50">
            <div class="alert alert-warning" role="alert">
                <strong>Atenção</strong>, promoção válida apenas para esse mês!
            </div>
            <div class="alert alert-primary" role="alert">
                <strong>FRETE GRÁTIS</strong> para compras de 2 jóias ou mais!
            </div> 
        </div>
    
        </br>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-3" >
                    <aside class="categorias">
                        <p>CATEGORIAS</p>
                        <ul>
                            <li onclick="exibirCategoria('todos')">Todas as jóias (15)</li>
                            <li onclick="exibirCategoria('alianca')">Alianças (3) </li>
                            <li onclick="exibirCategoria('anel')">Anéis (3)</li>
                            <li onclick="exibirCategoria('colar')">Colares (3) </li>
                            <li onclick="exibirCategoria('brinco')">Brincos (3) </li>
                            <li onclick="exibirCategoria('pulseira')">Pulseiras (3) </li>
                        </ul>
                    </aside>
                </div>

                <div class="col-sm-12 col-md-8 col-lg-9">
                    
                        <section class="produtos container">
                            <div class="row">
                                <?php
                                    $conn->query("set names utf8");

                                    $sql = "select * from produtos";
                                    $result = $conn->query($sql);
                                    
                                    if($result->num_rows > 0) {
                                        while($rows = $result->fetch_assoc()) {
                                ?>

                                    <div class="box-produto col-xs-6 col-md-6 col-lg-4 <?php echo $rows["categoria"] ?>" id="<?php echo $rows["idproduto"] ?>" >
                                        <img src="<?php echo $rows["imagem"] ?>" alt="<?php echo $rows["nome"] ?>">
                                        </br>
                                        <p class="nome-produto"><?php echo $rows["nome"] ?></p>
                                        <hr>
                                        <p class="antigo-preco"><?php echo $rows["preco"] ?></p>
                                        <p class="novo-preco"><?php echo $rows["novopreco"] ?></p>
                                    </div>
                            
                                <?php
                                        }
                                    } else {
                                        echo "Nenhum produto cadastrado ou encontrado";
                                    }
                                ?>
                        </section>

                        
                    </div>
                    
                </div>
            </div>

            <div class="modal-container" id="modal-container">
                <div class="modal1">
                    <button class="close-btn close">&times;</button>
                    <div class="modal-box-produto">
                        <img class="modal-img" src="./images/alianca1.png" alt="Aliança em ouro cravejada">
                        </br>
                        <p class="modal-nome-produto">Aliança em Ouro Cravejada</p>
                        </br>
                        <p class="modal-antigo-preco">R$ 2.500,00</p>
                        <p class="modal-novo-preco">R$ 1.900,00</p>
    
                        <button class="comprar-btn" id="btn-comprar">Comprar</button>
                    </div>
                </div>
            </div>

        </div>

   

    <?php
        include('./components/footer.html')
    ?>
</body>

</html>