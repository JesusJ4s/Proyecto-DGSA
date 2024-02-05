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

