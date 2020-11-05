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
    <title>Fale Conosco</title>
</head>

<body>
    
    <?php
        include('./components/header.html')
    ?>


    <div class="texto-padrao container ml-sm-0 ml-md-5 mt-5">
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
            <div class=row>
                <div class="col-sm-12 col-md-6 col-lg-6">

                     <form action="" method="post">
                        <div class="form-group">
                            <label for="email">Seu endereço de e-mail:</label>
                            <input type="email" name="email" class="form-control" id="email" aria-describedby="email" placeholder="Digite seu email"> <br>

                            <label for="mensagem">Digite aqui sua mensagem</label>
                            <textarea class="form-control" name="mensagem" id="mensagem" rows="4" placeholder="Sua mensagem..."></textarea>
                        
                             </br>
                            <button type="submit" class="add-btn">Enviar</button> </br>
                        </div>
                     </form>

                       
                </div>
            </div>
        </form>
    </div>

    <?php
        include('./components/footer.html')
    ?>
</body>

</html>