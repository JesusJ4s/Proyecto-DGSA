function toggleInput(button) {
    var input = button.previousElementSibling;
    if (input.getAttribute("type") === "password") {
      input.setAttribute("type", "text");
      button.textContent = "Ocultar";

      input.classList.remove('bg-secondary', 'text-light');
      input.classList.add('bg-light', 'text-dark');

    } else {
      input.setAttribute("type", "password");
      button.textContent = "Mostrar";
      input.classList.add('bg-secondary', 'text-light');
      input.classList.remove('bg-light', 'text-dark');

    }
  }

  function toggleInput2(button) {
    var input = button.previousElementSibling;
    if (input.hasAttribute("readonly")) {
        input.removeAttribute("readonly");
        input.focus();
        button.textContent = "Bloquear";

        input.classList.remove('bg-secondary', 'text-light');
        input.classList.add('bg-light', 'text-dark');

    } else {
        input.setAttribute("readonly", true);
        button.textContent = "Editar";

        input.classList.add('bg-secondary', 'text-light');
        input.classList.remove('bg-light', 'text-dark');

    }
  }

// ********************************************************************************
// ********************************************************************************
// ********************************************************************************
// ********************************************************************************

// MOSTRAR - OCULTAR DIVS
// INGRESO DE NUEVO EQUIPO
function cambioPesta1(){
    document.getElementById("parte1").classList.add("mostrar-div");
    document.getElementById("parte1").classList.remove("ocultar-div");
    document.getElementById("parte2").classList.add("ocultar-div"); 
    document.getElementById("parte3").classList.add("ocultar-div"); 
    document.getElementById("parte4").classList.add("ocultar-div"); 



}function cambioPesta2(){
    document.getElementById("parte2").classList.add("mostrar-div");
    document.getElementById("parte2").classList.remove("ocultar-div");
    document.getElementById("parte1").classList.add("ocultar-div"); 
    document.getElementById("parte3").classList.add("ocultar-div"); 
    document.getElementById("parte4").classList.add("ocultar-div");



}function cambioPesta3(){
    document.getElementById("parte3").classList.add("mostrar-div");
    document.getElementById("parte3").classList.remove("ocultar-div");
    document.getElementById("parte1").classList.add("ocultar-div"); 
    document.getElementById("parte2").classList.add("ocultar-div"); 
    document.getElementById("parte4").classList.add("ocultar-div"); 

}function cambioPesta4(){
    document.getElementById("parte1").classList.add("ocultar-div"); 
    document.getElementById("parte2").classList.add("ocultar-div"); 
    document.getElementById("parte3").classList.add("ocultar-div"); 
    document.getElementById("parte4").classList.add("mostrar-div");
    document.getElementById("parte4").classList.remove("ocultar-div");
}


// ********************************************************************************
// ********************************************************************************
// ********************************************************************************
// ********************************************************************************
const textareas = document.querySelectorAll("textarea");
const minChars = 20;

// Agregar evento "input" a cada "textarea"
for (let i = 0; i < textareas.length; i++) {
  const textarea = textareas[i];
  const charCount = document.createElement("div");
  charCount.classList.add("char-count");
  textarea.parentNode.insertBefore(charCount, textarea.nextSibling);

  textarea.addEventListener("input", function(){
    // Obtener la longitud del texto ingresado en el "textarea"
    const textLength = textarea.value.length;

    // Calcular los caracteres restantes
    const remainingChars = 250 - textLength;

    // Verificar si se ha alcanzado el mínimo de caracteres requeridos
    const isValid = textLength >= minChars;

    // Actualizar el contador de caracteres restantes y dar retroalimentación sobre la validez del texto ingresado
    charCount.innerText = `${remainingChars} caracteres restantes. ${isValid ? "Texto válido" : "Se requieren al menos 20 caracteres"}`;
  });
}
