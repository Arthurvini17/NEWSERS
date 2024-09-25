// Obtém o modal
var modal = document.getElementById("myModal");

// Obtém o botão que abre o modal
var btn = document.getElementById("openModal");

// Obtém o elemento <span> que fecha o modal
var closeModal = document.getElementById("closeModal");

// Quando o usuário clicar no botão, abre o modal 
btn.onclick = function() {
    modal.style.display = "block"; // Abre o modal
}

// Quando o usuário clicar no <span> (x), fecha o modal
closeModal.onclick = function() {
    modal.style.display = "none"; // Fecha o modal
}

// Quando o usuário clicar em qualquer lugar fora do modal, fecha o modal
window.onclick = function(event) {
    if (event.target === modal) {
        modal.style.display = "none"; // Fecha o modal
    }
}

