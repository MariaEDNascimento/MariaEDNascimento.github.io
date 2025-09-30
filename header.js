// Aguarda o DOM carregar completamente
document.addEventListener('DOMContentLoaded', function() {
    console.log('Header JavaScript carregado!');
    
    const menuHamburguer = document.querySelector('.menu-hamburguer');
    const menuMobile = document.querySelector('.menu-mobile');
    const overlay = document.querySelector('.overlay');
    const barraPesquisa = document.querySelector('.barra-pesquisa');
    const btnPesquisaMobile = document.querySelector('.btn-pesquisa-mobile');
    
    // Função para abrir/fechar menu mobile
    function toggleMenuMobile() {
        menuMobile.classList.toggle('active');
        overlay.classList.toggle('active');
        menuHamburguer.classList.toggle('active');
        document.body.style.overflow = menuMobile.classList.contains('active') ? 'hidden' : '';
        
        // Fecha a barra de pesquisa se estiver aberta
        if (barraPesquisa.classList.contains('active')) {
            barraPesquisa.classList.remove('active');
        }
    }
    
    // Função para fechar menu mobile
    function fecharMenuMobile() {
        menuMobile.classList.remove('active');
        overlay.classList.remove('active');
        menuHamburguer.classList.remove('active');
        document.body.style.overflow = '';
    }
    
    // Função para toggle da barra de pesquisa no mobile
    function toggleBarraPesquisa() {
        if (window.innerWidth <= 576) {
            barraPesquisa.classList.toggle('active');
            
            // Fecha o menu mobile se estiver aberto
            if (menuMobile.classList.contains('active')) {
                fecharMenuMobile();
            }
            
            // Se a barra de pesquisa está aberta, foca no input
            if (barraPesquisa.classList.contains('active')) {
                setTimeout(() => {
                    const inputPesquisa = barraPesquisa.querySelector('input');
                    if (inputPesquisa) {
                        inputPesquisa.focus();
                    }
                }, 300);
            }
        }
    }
    
    // Fecha a barra de pesquisa ao clicar no overlay
    function fecharBarraPesquisa() {
        if (barraPesquisa.classList.contains('active')) {
            barraPesquisa.classList.remove('active');
        }
    }
    
    // Event listeners
    if (menuHamburguer) {
        menuHamburguer.addEventListener('click', toggleMenuMobile);
    }
    
    if (overlay) {
        overlay.addEventListener('click', function() {
            fecharMenuMobile();
            fecharBarraPesquisa();
        });
    }
    
    if (btnPesquisaMobile) {
        btnPesquisaMobile.addEventListener('click', toggleBarraPesquisa);
    }
    
    // Fechar menu ao clicar nos links
    if (menuMobile) {
        menuMobile.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', fecharMenuMobile);
        });
    }
    
    // Fechar barra de pesquisa ao pressionar ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            fecharBarraPesquisa();
        }
    });
    
    // Fechar barra de pesquisa ao clicar fora (para desktop)
    document.addEventListener('click', function(e) {
        if (window.innerWidth > 576 && barraPesquisa.classList.contains('active')) {
            if (!barraPesquisa.contains(e.target) && !btnPesquisaMobile.contains(e.target)) {
                fecharBarraPesquisa();
            }
        }
    });
    
    // Reage a redimensionamento da tela
    window.addEventListener('resize', function() {
        if (window.innerWidth > 576) {
            fecharMenuMobile();
            // Garante que a barra de pesquisa fique visível em telas maiores
            if (barraPesquisa.style.display === 'none') {
                barraPesquisa.style.display = 'block';
            }
            barraPesquisa.classList.remove('active');
        } else {
            // Em mobile, esconde a barra de pesquisa inicialmente
            if (!barraPesquisa.classList.contains('active')) {
                barraPesquisa.style.display = 'none';
            }
        }
    });
    
    // Inicializar estado da barra de pesquisa
    if (window.innerWidth <= 576) {
        barraPesquisa.style.display = 'none';
    }
});