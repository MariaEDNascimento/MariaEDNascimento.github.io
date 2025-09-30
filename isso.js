// JavaScript para interatividade dos filtros
document.addEventListener('DOMContentLoaded', function() {
    // Alternar estado ativo dos filtros
    const filtroOpcoes = document.querySelectorAll('.filtro-opcao');
    
    filtroOpcoes.forEach(opcao => {
        opcao.addEventListener('click', function() {
            this.classList.toggle('ativo');
        });
    });
    
    // Botão aplicar filtro de preço
    const btnAplicar = document.querySelector('.btn-aplicar');
    
    btnAplicar.addEventListener('click', function() {
        const precoMin = document.querySelector('.preco-input:nth-child(1)').value;
        const precoMax = document.querySelector('.preco-input:nth-child(2)').value;
        
        if (precoMin || precoMax) {
            alert(`Filtro de preço aplicado: R$ ${precoMin || '0'} - R$ ${precoMax || 'máximo'}`);
            // Aqui você implementaria a lógica real de filtragem
        }
    });
});