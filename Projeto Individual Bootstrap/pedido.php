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
    <title>Página de pedido</title>
</head>
<body>
    <?php
        include('./components/header.html')
    ?>

        <?php
            $idproduto = $_GET["idproduto"];
            

            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "rosalyjewelry";

            $conn = mysqli_connect($servername, $username, $password, $database);

            if (!$conn) {
                die ("Falha na conexão com o BD " .mysqli_connect_errno());
                exit();
            }

            $conn->query("set names utf8");

            $sql = "SELECT * FROM produtos WHERE idproduto = $idproduto";

            $resultado = $conn->query($sql);
            $dados_produto = $resultado->fetch_assoc();

            $nome = $dados_produto["nome"];
            $novopreco = $dados_produto["novopreco"];
            $img = $dados_produto["imagem"];

        ?>
        <div class="corpo-pedido">
    
        <div class="formulario-pedido">

            <p class="novo-preco">Preencha o formulário abaixo para realizar o pedido</p>

            <img src="<?php echo $img ?>" alt="Imagem do produto">

            <div class="row justify-content-center">
                <div class="col-sm-8 col-md-9 col-lg-9">

                    <form action="confirmacao_pedido.php" method="post">
                        <div class="form-group">
                            <label for="nomeproduto">Nome do produto</label> <br>
                            <input class="form-control" type="text" name="nomeproduto" required value="<?php echo $nome ?>"/>
                            <br><br>

                            <label for="valorunitario">Preço</label> <br>
                            <input class="form-control" type="number" name="valorunitario" required value="<?php echo $novopreco ?>"/> 
                            <br><br>

                            <label for="quantidade">Quantidade</label> <br>
                            <input class="form-control" type="number" name="quantidade" required value="1"/> <br><br>

                            <label for="nomecliente">Nome do cliente</label> <br>
                            <input class="form-control" type="text" name="nomecliente" required /> <br><br>

                            <label for="endereco">Endereço</label> <br>
                            <input class="form-control" type="text" name="endereco" required /> <br><br>
                        
                            <label for="telefone">Telefone</label> <br>
                            <input class="form-control" type="tel" name="telefone" required /> <br><br><br>

                            <button type="submit" class="comprar-btn">Fazer pedido</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <?php
        include('./components/footer.html')
    ?>

    
</body>
</html>