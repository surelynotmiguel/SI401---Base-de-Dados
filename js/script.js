document.addEventListener("DOMContentLoaded", function() {
    const radioMasculino = document.getElementById("masculino");
    const radioFeminino = document.getElementById("feminino");
    const radioOutro = document.getElementById("outro");
    const outroInput = document.getElementById("outroInput");

    radioMasculino.addEventListener("change", toggleOutroInput);
    radioFeminino.addEventListener("change", toggleOutroInput);
    radioOutro.addEventListener("change", toggleOutroInput);

    function toggleOutroInput() {
        if (radioOutro.checked) {
            outroInput.style.display = "inline";
        } else {
            outroInput.style.display = "none";
        }
    }
    toggleOutroInput();
});