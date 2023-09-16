// Obtén el listado de todas las pestañas abiertas
var pestañas = window.open("about:blank").closed;

// Obtén el nombre de la última pestaña abierta
var últimasPestañas = pestañas.slice(-1);

// Imprime el nombre de la última pestaña abierta
console.log(últimasPestañas[0].name);
