<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT&display=swap" rel="stylesheet">
    <script src="script.js"></script>
	<title>Confirmação de Pedido</title>
</head>
<body>

	<?php 
        include('./components/header.html')
	?>

	<div class="confirmacao-pedido">
	<?php

		 $nomeproduto = ($_POST['nomeproduto']);
		 $preco = ($_POST['valorunitario']);
		 $quantidade = ($_POST['quantidade']);
		 $nomecliente = ($_POST['nomecliente']);
		 $endereco = ($_POST['endereco']);
		 $telefone = ($_POST['telefone']);

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
		
		$insere = "INSERT INTO pedidos (idpedido, nomecliente, endereco, telefone, nomeproduto, valorunitario, quantidade, valortotal) VALUES
		(DEFAULT, '$nomecliente', '$endereco', '$telefone', '$nomeproduto', '$preco', '$quantidade', (valorunitario * quantidade))";
			
	
		if (mysqli_query($conn, $insere)) {
			echo "Seu pedido foi feito com sucesso!";
		} else {
			echo "Error: " . $insere . "<br>" . mysqli_error($conn);
		}
			
		mysqli_close($conn);

	?>
	 <br><br>
	<a href="index.php">Clique aqui para voltar à página inicial</a>

</div>

	<?php
        include('./components/footer.html')
	?>
	

</body>
</html>