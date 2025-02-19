setTimeout(() => {
    errorMessage.style.animation = 'fadeOut 0.5s ease-in-out'; // Aplica a animação de fade-out
    setTimeout(() => {
        errorMessage.style.display = 'none'; // Oculta a mensagem após a animação
    }, 500); // Tempo da animação (0.5 segundos)
}, 5000); // 15 segundos