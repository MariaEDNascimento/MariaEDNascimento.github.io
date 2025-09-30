<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="header.css">
    <title></title>
</head>
<body>
    <!-- Header Principal -->
    <div class="titulo">
        <!-- Menu Hambúrguer para Mobile -->
        <div class="menu-hamburguer">
            <span></span>
            <span></span>
            <span></span>
        </div>
        
        <a href="http://localhost/Tcc/menu.php" class="logo-link">
            <img class="logo" src="imagens/logo.png" alt="logo">
        </a>
        
        <div class="barra-pesquisa">
            <form action="busca.php" method="post">
                <input type="text" placeholder="O que você procura?" name="q">
            </form>
        </div>

        <div class="acoes-usuario">
            <a href="http://localhost/Tcc/perfil.php" class="perfil-link">
                <img class="perfil" src="imagens/perfil.png" alt="perfil">
                <span class="texto-perfil">minha<br>conta</span>
            </a>
            
            <div class="carrinho-container">
                <button id="btn-carrinho" class="btn-carrinho"></button>
                <span class="texto-sacola">minha<br>sacola</span>
            </div>
        </div>

        <!-- Ícone de pesquisa para mobile -->
        <button class="btn-pesquisa-mobile">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#808080" stroke-width="2">
                <circle cx="11" cy="11" r="8"></circle>
                <path d="m21 21-4.3-4.3"></path>
            </svg>
        </button>
    </div>

    <!-- Carretel de Navegação -->
    <div class="carretel">
        <div id="carretel">
            <a href="roupas.php">Roupas</a>
            <a href="maquiagem.php">Maquiagem</a>
            <a href="promocoes.php">Promoções</a>
            <a href="lancamentos.php">Lançamentos</a>
            <a href="maisvendas.php">Mais vendidos</a>
        </div>
    </div>
    
    <!-- Menu Mobile -->
    <div class="menu-mobile">
        <a href="roupas.php">Roupas</a>
        <a href="maquiagem.php">Maquiagem</a>
        <a href="promocoes.php">Promoções</a>
        <a href="lancamentos.php">Lançamentos</a>
        <a href="maisvendas.php">Mais vendidos</a>
        <a href="perfil.php">Minha Conta</a>
        <a href="#" class="btn-carrinho-mobile">Minha Sacola</a>
    </div>

    <div class="overlay"></div>
    
    <script src="header.js"></script>
</body>
</html>