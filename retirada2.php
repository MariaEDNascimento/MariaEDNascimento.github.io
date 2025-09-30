<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="retirada.css">
        <script src="retirada.js" defer></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>retirada na loja</title>
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

    <!--mapa e alteraçao de CEP-->
<div class="mapa-container">
    <p>Nossas lojas</p>
    <h3>Encontre a loja FIQUE FASHION mais proxima de você</h3>
    <div class="botao-cep">
    <form action="#" method="get">
        <button><a href="http://localhost/Tcc/retirada.php">Loja Santa Cruz</a></button>
        <button><a href="http://localhost/Tcc/retirada2.php">Loja Caxias</a></button>
    </form>
    </div>
</div>
<div class="mapa">
    <div class="desc-mapa">
        <p>ㅤFiqueFashion</p>
        <h3>Santa Cruz da Serra</h3>
        <h4>Duque de Caxias</h4>
        <h4 style="margin-bottom:25px;">Loja de moda feminina</h4>
        <p>ㅤFiqueFashion Make-up</p>
        <h3>Santa Cruz da Serra</h3>
        <h4>Duque de caxias</h4>
        <h4 style="margin-bottom:25px;">Nossa loja de maquiagens</h4>
        <p>ㅤFiqueFashion Shopping</p>
        <h3>Shopping caxias</h3>
        <h4>Duque de Caxias</h4>
        <h4>Ao lado das casas Bahia</h4>
    </div>
    <iframe 
    id="mapaa"
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3678.410318096409!2d-43.28889618893948!3d-22.787255133524166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x997a7b5b2c578f%3A0xfae481f5fb33993e!2sCaxias%20Shopping!5e0!3m2!1spt-BR!2sbr!4v1758306378826!5m2!1spt-BR!2sbr"
    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe> 
</div>

<!--fim do mapa-->











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