<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="isso.css">
    <title>Moda & Estilo - Loja Online</title>
</head>
<body>
    <?php include "header.php" ?>
    
    <div class="conteudo-principal">
        <!-- Sistema de Filtros - Agora em position: absolute -->
        <div class="filtros-container">
            <div class="filtro-grupo">
                <div class="filtro-titulo">TAMANHO</div>
                <div class="filtro-opcoes">
                    <div class="filtro-opcao">PP</div>
                    <div class="filtro-opcao">P</div>
                    <div class="filtro-opcao ativo">M</div>
                    <div class="filtro-opcao">G</div>
                    <div class="filtro-opcao">XG</div>
                </div>
            </div>
            
            <div class="filtro-grupo">
                <div class="filtro-titulo">COR</div>
                <div class="filtro-opcoes">
                    <div class="filtro-opcao ativo">Preto</div>
                    <div class="filtro-opcao">Branco</div>
                    <div class="filtro-opcao">Vermelho</div>
                    <div class="filtro-opcao">Azul</div>
                    <div class="filtro-opcao">Verde</div>
                    <div class="filtro-opcao">Rosa</div>
                    <div class="filtro-opcao">Amarelo</div>
                    <div class="filtro-opcao">Cinza</div>
                </div>
            </div>
            
            <div class="filtro-grupo">
                <div class="filtro-titulo">PREÇO</div>
                <div class="faixa-preco">
                    <div class="preco-inputs">
                        <input type="number" class="preco-input" placeholder="De" min="0">
                        <input type="number" class="preco-input" placeholder="Até" min="0">
                    </div>
                    <button class="btn-aplicar">Aplicar</button>
                </div>
            </div>
            
            <div class="filtro-grupo">
                <div class="filtro-titulo">CATEGORIA</div>
                <div class="filtro-opcoes">
                    <div class="filtro-opcao ativo">Vestidos</div>
                    <div class="filtro-opcao">Conjuntos</div>
                    <div class="filtro-opcao">Blusas</div>
                    <div class="filtro-opcao">Calças</div>
                    <div class="filtro-opcao">Saias</div>
                </div>
            </div>
            
            <div class="filtro-grupo">
                <div class="filtro-titulo">MATERIAL</div>
                <div class="filtro-opcoes">
                    <div class="filtro-opcao">Algodão</div>
                    <div class="filtro-opcao ativo">Jeans</div>
                    <div class="filtro-opcao">Tricot</div>
                    <div class="filtro-opcao">Seda</div>
                    <div class="filtro-opcao">Linho</div>
                </div>
            </div>
        </div>
        
        <!-- Conteúdo principal -->
        <div class="categorias-titulo">
          <h2>MAIS VENDIDOS</h2>
        </div>
        
        <!-- Primeira linha de produtos -->
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
                <div class="foto-produto" style="background-image: url('imagens/a.png')"></div>
                <h4>Vestido decotado</h4>
                <p>R$ 89,90</p>
                <span class="produto-desc">Vestido com decote</span>
              </a>
            </div>
            <div class="item-produto">
              <a href="venda.php" class="item-link">
                <div class="foto-produto" style="background-image: url('imagens/b.png')"></div>
                <h4>Vestido Midi</h4>
                <p>R$ 99,90</p>
                <span class="produto-desc">Vestido semi alto</span>
              </a>
            </div>
            <div class="item-produto">
              <a href="venda.php" class="item-link">
                <div class="foto-produto" style="background-image: url('imagens/c.png')"></div>
                <h4>Conjunto Oversized</h4>
                <p>R$ 79,90</p>
                <span class="produto-desc">Conjunto confortável</span>
              </a>
            </div>
          </div>
        </div>

        <!-- Segunda linha de produtos -->
        <div class="produtos-container">
          <div class="linha-produtos">
            <div class="item-produto">
              <a href="venda.php" class="item-link">
                <div class="foto-produto" style="background-image: url('imagens/d.png')"></div>
                <h4>Vestido Mini</h4>
                <p>R$ 129,90</p>
                <span class="produto-desc">Vestido com barra flipada</span>
              </a>
            </div>
            <div class="item-produto">
              <a href="venda.php" class="item-link">
                <div class="foto-produto" style="background-image: url('imagens/epng.png')"></div>
                <h4>Conjunto trançado</h4>
                <p>R$ 89,90</p>
                <span class="produto-desc">Conjunto jeans trançado</span>
              </a>
            </div>
            <div class="item-produto">
              <a href="venda.php" class="item-link">
                <div class="foto-produto" style="background-image: url('imagens/f.png')"></div>
                <h4>Calça e blaser</h4>
                <p>R$ 99,90</p>
                <span class="produto-desc">Calça e blaser modelo LW</span>
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

        <!-- Terceira linha de produtos -->
        <div class="produtos-container">
          <div class="linha-produtos">
            <div class="item-produto">
              <a href="venda.php" class="item-link">
                <div class="foto-produto" style="background-image: url('imagens/conjuntos.png')"></div>
                <h4>Vestido Floral</h4>
                <p>R$ 129,90</p>
                <span class="produto-desc">Vestido com estampa floral</span>
              </a>
            </div>
            <div class="item-produto">
              <a href="venda.php" class="item-link">
                <div class="foto-produto" style="background-image: url('imagens/gg.png')"></div>
                <h4>Conjunto com flor</h4>
                <p>R$ 89,90</p>
                <span class="produto-desc">Conjunto Top floral</span>
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
                <div class="foto-produto" style="background-image: url('imagens/k.png')"></div>
                <h4>Duplo Tricot </h4>
                <p>R$ 79,90</p>
                <span class="produto-desc">Blusa e short tricot</span>
              </a>
            </div>
          </div>
        </div>

        <!-- Quarta linha de produtos -->
        <div class="produtos-container">
          <div class="linha-produtos">
            <div class="item-produto">
              <a href="venda.php" class="item-link">
                <div class="foto-produto" style="background-image: url('imagens/q.png')"></div>
                <h4>Casaco gola alta</h4>
                <p>R$ 129,90</p>
                <span class="produto-desc">Csaco tricot confortável</span>
              </a>
            </div>
            <div class="item-produto">
              <a href="venda.php" class="item-link">
                <div class="foto-produto" style="background-image: url('imagens/i.png')"></div>
                <h4>Kit alça curvada</h4>
                <p>R$ 89,90</p>
                <span class="produto-desc">Blusa com alça caída</span>
              </a>
            </div>
            <div class="item-produto">
              <a href="venda.php" class="item-link">
                <div class="foto-produto" style="background-image: url('imagens/s.png')"></div>
                <h4>Calça e blaser asadelta</h4>
                <p>R$ 99,90</p>
                <span class="produto-desc">Calça e blaser aberto</span>
              </a>
            </div>
            <div class="item-produto">
              <a href="venda.php" class="item-link">
                <div class="foto-produto" style="background-image: url('imagens/j.png')"></div>
                <h4>Duplo Xadrez</h4>
                <p>R$ 79,90</p>
                <span class="produto-desc">Conjunto Junino</span>
              </a>
            </div>
          </div>
        </div>
    </div>
    
    <script src="isso.js"></script>
    <?php include "footer.php" ?>
</body>
</html>