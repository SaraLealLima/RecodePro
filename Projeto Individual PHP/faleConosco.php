<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link href="styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT&display=swap" rel="stylesheet">
    <script src="script.js"></script>
    <title>Fale Conosco</title>
</head>

<body>
    
    <?php
        include('./components/header.html')
    ?>


    <div class="texto-padrao">
        <p id="titulo">FALE CONOSCO</p>
        <p> Estamos sempre prontos para te atender!</p>
        <p>Nosso telefone para atendimento referente a compras realizadas nas nossas lojas físicas: </br>
            (11) 4358-6732 </br> </br>
            Para compras realizadas pelo site: </br>
            (11) 4360-5859</p>
        <p>Ou se preferir, entre em contato pelo nosso e-mail: </br>
            atendimento@rosalyjewelry.com.br</p>
        </br>

        <p>Para mais praticidade, deixe uma mensagem, sugestão,
            elogio ou dúvidas e seu endereço de e-mail. Nossa equipe responderá assim que possível.</p>
        <form>
            <label for="email">Seu endereço de e-mail:</label></br>
            <input type="email" name="email" id="email"></br></br>
            <label for="message">Sua mensagem:</label></br>
            <textarea name="messagem" id="message" cols="75" rows=10>Digite aqui...</textarea> </br></br>
            <button class="add-btn">Enviar</button>
        </form>
    </div>

    <?php
        include('./components/footer.html')
    ?>
</body>

</html>