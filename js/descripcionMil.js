const textareas = document.querySelectorAll(".textarea");
// const textareas = document.getElementById("descripcion");
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
    const remainingChars = 20000 - textLength;

    // Verificar si se ha alcanzado el mínimo de caracteres requeridos
    const isValid = textLength >= minChars;

    // Actualizar el contador de caracteres restantes y dar retroalimentación sobre la validez del texto ingresado
    charCount.innerText = `${remainingChars} caracteres restantes. ${isValid ? "Texto válido" : "Se requieren al menos 20 caracteres"}`;
  });
}