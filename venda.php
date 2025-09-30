<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="venda.css">
        <script src="venda.js" defer></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
      <!--carretel que vai em todas as paginas-->
    <div class="titulo">
    <a href="http://localhost/Tcc/index.php"><img class="logo" src="imagens/logo.png" alt="logo"></a>
    <div class="barra-pesquisa">
        <form action="busca.php" method="post">
            <input type="text" placeholder="O que você procura?..." name="q">
        </form>
    </div>
    <a href="http://localhost/Tcc/perfil.php"><img class="perfil" src="imagens/perfil.png" alt="perfil"></a>
    <a style="color: #808080; margin-right:40px;"href="http://localhost/Tcc/perfil.php" class="barra">minha<br>conta</a>
    <div class="btn-carrinho">
    <button id="btn-carrinho"></button>
    </div>
    <a style="color: #808080;"id="btn-carrinho"class="barra">minha<br>sacola</a>
    </div>

   

    <div class="carretel">
        <div id="carretel">
        <a href="roupas.php" style="padding-left: 75px;">Roupas</a>
        <a href="maquiagem.php" style="padding-left: 75px;">Maquiagem</a>
        <a href="promocoes.php" style="padding-left: 75px;">Promoções</a>
        <a href="lancamentos.php" style="padding-left: 75px;">Lançamentos</a>
        <a href="maisvendas.php" style="padding-left: 75px;">Mais vendidos</a>
        </div>
    </div>
        <div style="height:106px;"></div>

    <!--fim do carretel-->


<div style="height: 600px">
    <div class="fotos-container">
        <div class="fotos-canto">
            <img src="imagens/rosa placeholder.webp" alt="a">
            <img src="imagens/rosa placeholder.webp" alt="b">
            <img src="imagens/rosa placeholder.webp" alt="c">
            <img src="imagens/rosa placeholder.webp" alt="d">
        </div>
        <div class="fotos-grnd">
            <img src="imagens/rosa placeholder.webp" alt="d">
        </div>
        <div class="fotos-produto">
            <h2 style="margin: 0">NOME DO PRODUTO</h2>
            <h3 style="margin: 0">CORES</h3>
            <form action="">
                <input type="radio" id="cor1" name="a" value="iten1" required>
                <input type="radio" id="cor2" name="a" value="iten2" required>
                <input type="radio" id="cor3" name="a" value="iten3" required>
            </form>
            <h3 style="margin: 0">TAMANHO</h3>
            <form action="">
                <input type="button" name="a" value="iten1" required>
                <input type="button" name="a" value="iten2" required>
                <input type="button" name="a" value="iten3" required>
                <input type="button" name="a" value="iten4" required>
            </form>
            <h1 style="margin: 0; color: var(--rosa)">R$ PREÇO</h1>
            <input type="number">
            <button type="submit">COMPRAR</button>

        </div>
    </div>
</div>


    <!--rodape-->
    <div class="rodape">
        <h3>VENHA FAZER <br>PARTE DA<br> NOSSA FAMÍLIA!</h3>
        <form action="" method="post">
            <input id="informacoes"type="text" name="nomeusr" placeholder="SEU NOME COMPLETO" class="family">
            <input id="informacoes" type="email" name="emailusr" placeholder="SEU E-MAIL" class="family">
            <input id="infbott" type="submit" value="➤">
        </form>
    </div>
    <div id="sombra">
    <div class="inforodape">
        <h3 id="titulosrodape">
            Nossa personalidade
        </h3>
        <p>Somos uma marca confiante, acessível e apaixonada por destacar a beleza única de cada pessoa, com atitude e leveza.</p>
        <h3 id="titulosrodape">Nossa visão</h3>
        <p>Ser referência em moda e beleza ao oferecer produtos de qualidade, com estilo, conforto e propósito. Queremos criar uma 
            comunidade onde todos se sintam representados, valorizados e livres para se expressar.</p>
            <h3 id="titulosrodape">Nossa missão</h3>
            <p>Entregar roupas e maquiagens que elevem sua autoestima, aliando qualidade, estilo e um atendimento atencioso em cada
             etapa da sua jornada conosco.</p>
             <h2 id="titulosrodape" style=" font-size: 24px;">Compromisso com você a cada detalhe.</h2>
    </div>
    </div>
    <div style="height:200px;"></div>
    <!--fim rodape-->
</body>
</html>
</body>
</html>