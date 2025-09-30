const btnCarrinho = document.getElementById('btn-carrinho');
const painelCarrinho = document.getElementById('painel-carrinho');
const btnFechar = document.getElementById('fechar-carrinho');

btnCarrinho.addEventListener('click', () => {
    painelCarrinho.classList.toggle('show');
});

btnFechar.addEventListener('click', () => {
    painelCarrinho.classList.remove('show');
});