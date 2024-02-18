document.addEventListener("DOMContentLoaded", function() {
    // Muestra u oculta el botón dependiendo del desplazamiento de la página
    window.onscroll = function() {
        showScrollToTopButton();
    };

    // Lleva la página al inicio cuando se hace clic en el botón
    document.getElementById("scrollToTopBtn").onclick = function() {
        scrollToTop();
    };
});

function showScrollToTopButton() {
    var btn = document.getElementById("scrollToTopBtn");
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        btn.style.display = "block";
    } else {
        btn.style.display = "none";
    }
}

function scrollToTop() {
    document.body.scrollTop = 0; // Para Safari
    document.documentElement.scrollTop = 0; // Para Chrome, Firefox, IE y Opera
}
