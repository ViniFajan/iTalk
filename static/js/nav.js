let lastScrollPosition = 0; // Última posição da rolagem
const navbar = document.getElementById('navbar');

window.addEventListener('scroll', () => {
    const currentScrollPosition = window.scrollY;

    if (currentScrollPosition > lastScrollPosition && currentScrollPosition > 50) {
        // Rolando para baixo e além de 50px
        navbar.classList.add('hidden');
    } else {
        // Rolando para cima
        navbar.classList.remove('hidden');
    }

    lastScrollPosition = currentScrollPosition; // Atualiza a posição da rolagem
});