

document.addEventListener("DOMContentLoaded", function() {
    // Seleciona os elementos de input de rádio
    const radioMasculino = document.getElementById("masculino");
    const radioFeminino = document.getElementById("feminino");
    const radioOutro = document.getElementById("outro");

    // Seleciona o elemento de input de texto "Outro"
    const outroInput = document.getElementById("outroInput");

    // Adiciona um ouvinte de evento de mudança para os botões de rádio
    radioMasculino.addEventListener("change", toggleOutroInput);
    radioFeminino.addEventListener("change", toggleOutroInput);
    radioOutro.addEventListener("change", toggleOutroInput);

    // Função para mostrar ou ocultar o campo "Outro"
    function toggleOutroInput() {
        if (radioOutro.checked) {
            outroInput.style.display = "inline";
        } else {
            outroInput.style.display = "none";
        }
    }

    // Chama a função inicialmente para garantir que o campo esteja configurado corretamente
    toggleOutroInput();
});