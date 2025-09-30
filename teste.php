<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="teste.css">
        <script src="teste.js" defer></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <title>página principal</title>
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

    <!--slide lateral-->

    <div id="painel-carrinho">
    <h3>Meu Carrinho</h3>
    <div id="itens-carrinho">

    </div>
    </div>




    <!--fim do slide-->

    <div class="carretel">
        <div id="carretel">
        <a href="roupas.php">Roupas</a>
        <a href="maquiagem.php">Maquiagem</a>
        <a href="lancamentos.php">Lançamentos</a>
        <a href="maisvendas.php">Mais vendidos</a>
        </div>
    </div>
        <div style="height:106px;"></div>

    <!--fim do carretel-->