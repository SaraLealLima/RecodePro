<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
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

            <form action="confirmacao_pedido.php" method="post">
                <label for="nomeproduto">Nome do produto</label> <br>
                <input type="text" name="nomeproduto" required value="<?php echo $nome ?>"/>  <br><br>

                <label for="valorunitario">Preço</label> <br>
                <input type="number" name="valorunitario" required value="<?php echo $novopreco ?>"/> <br><br>

                <label for="quantidade">Quantidade</label> <br>
                <input type="number" name="quantidade" required value="1"/> <br><br>

                <label for="nomecliente">Nome do cliente</label> <br>
                <input type="text" name="nomecliente" required /> <br><br>

                <label for="endereco">Endereço</label> <br>
                <input type="text" name="endereco" required /> <br><br>
            
                <label for="telefone">Telefone</label> <br>
                <input type="tel" name="telefone" required /> <br><br><br>

                <button type="submit" class="comprar-btn">Fazer pedido</button>

            </form>

        </div>
    </div>

    <?php
        include('./components/footer.html')
    ?>

    
</body>
</html>