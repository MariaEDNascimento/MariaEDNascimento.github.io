<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>Página Principal</title>
</head>
<body>
  <?php include "header.php"; ?>
  
   <!-- Carrossel -->
    <div class="carrossel-container">
      <div class="carrossel">
        <img src="imagens/banner1.png" alt="Banner 1">
        <img src="imagens/banner2.png" alt="Banner 2">
        <img src="imagens/banner3.png" alt="Banner 3">
      </div>
    </div>

    <!-- Seção Pagamentos -->
    <div class="pagamentos">
      <div class="pagamento-item">
        <img class="pagamento-img" src="imagens/icone loja.png" alt="Retire na loja">
        <p class="pagamento-texto">Retire em <br>nossas lojas</p>
      </div>
      <div class="pagamento-item">
        <img class="pagamento-img" src="imagens/icone pix.png" alt="Pague com PIX">
        <p class="pagamento-texto">Pague <br>utilizando PIX!</p>
      </div>
      <div class="pagamento-item">
        <img class="pagamento-img" src="imagens/icone cartao.png" alt="Parcele sem juros">
        <p class="pagamento-texto">Parcele em até <br>6x sem juros</p>
      </div>
    </div>

    <!-- Categorias -->
    <div class="categorias-container">
      <div class="categorias-titulo">
        <h2>CATEGORIAS</h2>
      </div>
      <div class="lista-categorias">
        <a href="#" class="categoria-link">
          <img src="imagens/conjuntos.png" alt="Conjuntos" class="categoria-img">
          <p>Conjuntos</p>
        </a>
        <a href="#" class="categoria-link">
          <img src="imagens/maquiagem.png" alt="Maquiagens" class="categoria-img">
          <p>Maquiagens</p>
        </a>
        <a href="#" class="categoria-link">
          <img src="imagens/skincare.png" alt="Skin Care" class="categoria-img">
          <p>Skin Care</p>
        </a>
        <a href="#" class="categoria-link">
          <img src="imagens/partedecima.png" alt="Parte de cima" class="categoria-img">
          <p>Parte de cima</p>
        </a>
        <a href="#" class="categoria-link">
          <img src="imagens/partedebaixo.png" alt="Parte de baixo" class="categoria-img">
          <p>Parte de baixo</p>
        </a>
      </div>
    </div>

    <!-- Mais Vendidos -->
    <div class="categorias-titulo">
      <h2>MAIS VENDIDOS</h2>
    </div>

    <div class="produtos-container">
      <div class="linha-produtos">
        <div class="item-produto">
          <a href="venda.php" class="item-link">
            <div class="foto-produto" style="background-image: url('imagens/fu.png')"></div>
            <h4>Vestido Floral Midi</h4>
            <p>R$ 129,90</p>
            <span class="produto-desc">Vestido com estampa floral</span>
          </a>
        </div>
        <div class="item-produto">
          <a href="venda.php" class="item-link">
            <div class="foto-produto" style="background-image: url('imagens/ft.png')"></div>
            <h4>Kit serum hidratante</h4>
            <p>R$ 89,90</p>
            <span class="produto-desc">2 caixas hidratantes</span>
          </a>
        </div>
        <div class="item-produto">
          <a href="venda.php" class="item-link">
            <div class="foto-produto" style="background-image: url('imagens/fq.png')"></div>
            <h4>Calça e blaser Jeans</h4>
            <p>R$ 99,90</p>
            <span class="produto-desc">Calça e blaser modelo mom</span>
          </a>
        </div>
        <div class="item-produto">
          <a href="venda.php" class="item-link">
            <div class="foto-produto" style="background-image: url('imagens/fc.png')"></div>
            <h4>Duplo Tricot Oversized</h4>
            <p>R$ 79,90</p>
            <span class="produto-desc">Blusa de tricot confortável</span>
          </a>
        </div>
      </div>
    </div>

    <!-- Lançamentos -->
    <div class="categorias-titulo">
      <h2>LANÇAMENTOS</h2>
    </div>

    <div class="produtos-container">
      <div class="linha-produtos">
        <div class="item-produto">
          <a href="venda.php" class="item-link">
            <div class="foto-produto" style="background-image: url('imagens/fo.png')"></div>
            <h4>Conjunto Linho Verão</h4>
            <p>R$ 159,90</p>
            <span class="produto-desc">Top e saia em linho</span>
          </a>
        </div>
        <div class="item-produto">
          <a href="venda.php" class="item-link">
            <div class="foto-produto" style="background-image: url('imagens/fss.png')"></div>
            <h4>Vestido alfaiataria</h4>
            <p>R$ 219,90</p>
            <span class="produto-desc">Vestido alfaiataria</span>
          </a>
        </div>
        <div class="item-produto">
          <a href="venda.php" class="item-link">
            <div class="foto-produto" style="background-image: url('imagens/fs.png')"></div>
            <h4>Macacão Jeans</h4>
            <p>R$ 139,90</p>
            <span class="produto-desc">Macacão jeans alfaiataria</span>
          </a>
        </div>
        <div class="item-produto">
          <a href="venda.php" class="item-link">
            <div class="foto-produto" style="background-image: url('imagens/fd.png')"></div>
            <h4>Serum Vitamina C</h4>
            <p>R$ 139,90</p>
            <span class="produto-desc">Macacão jeans alfaiataria</span>
          </a>
        </div>
      </div>
    </div>
    <div class="produtos-container">
      <div class="linha-produtos">
        <div class="item-produto">
          <a href="venda.php" class="item-link">
            <div class="foto-produto" style="background-image: url('imagens/kp.png')"></div>
            <h4>Kit pincel </h4>
            <p>R$ 59,90</p>
            <span class="produto-desc">4 pinceis</span>
          </a>
        </div>
        <div class="item-produto">
          <a href="venda.php" class="item-link">
            <div class="foto-produto" style="background-image: url('imagens/t.png')"></div>
            <h4>scrunchies coloridas</h4>
            <p>R$ 29,90</p>
            <span class="produto-desc">scrunchies de varias cores</span>
          </a>
        </div>
        <div class="item-produto">
          <a href="venda.php" class="item-link">
            <div class="foto-produto" style="background-image: url('imagens/g.png')"></div>
            <h4>Gloss brilhoso</h4>
            <p>R$ 79,90</p>
            <span class="produto-desc">Gloss de melância</span>
          </a>
        </div>
        <div class="item-produto">
          <a href="venda.php" class="item-link">
            <div class="foto-produto" style="background-image: url('imagens/vv.png')"></div>
            <h4>Vestido de abas</h4>
            <p>R$ 49,90</p>
            <span class="produto-desc">Vestido curvado</span>
          </a>
        </div>
      </div>
    </div>

    <div class="botao-produtos">
      <a href="http://localhost/Tcc/venda.php" class="btn-ver-todos">VEJA TODOS OS PRODUTOS</a>
    </div>

    <div class="espacamento-footer"></div>

    <?php include "footer.php"; ?>
</body>
</html>