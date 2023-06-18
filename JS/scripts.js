// Obtener referencias a los elementos del formulario
let nombre_form = document.getElementById('nombre_form');
let apellido_form = document.getElementById('apellido_form');
let correo_form = document.getElementById('correo_form');
let cantidad_form = document.getElementById('cantidad_form');
let total_form = document.getElementById('total_form');

// Obtener elementos HTML
const cantidadInput = document.querySelector("#cantidad_form input");
const categoriaSelect = document.querySelector("#floatingSelectGrid");
const totalContainer = document.querySelector("#total_form .alert");
const totalValue = document.querySelector("#total_form .alert span");
const totalButton = document.querySelector(".botones:nth-child(2)");
const borrarButton = document.querySelector(".botones:nth-child(1)");

// Obtener referencias a la botonera
const botonTotal = document.querySelector(".botones:nth-child(2)");
const botonBorrar = document.querySelector(".botones:nth-child(1)");

// Función para calcular el total a pagar
function calcularTotal() {
  const cantidad = parseInt(cantidadInput.value);
  const categoria = categoriaSelect.value;
  let resultado = 0;

  if (isNaN(cantidad) || cantidad <= 0) {
    alert("Por favor, ingresa una cantidad válida de tickets.");
    return;
  }

  switch (categoria) {
    case "2":
      resultado = cantidad * 200 * 0.2;
      break;
    case "3":
      resultado = cantidad * 200 * 0.5;
      break;
    case "4":
      resultado = cantidad * 200 * 0.85;
      break;
    default:
      resultado = cantidad * 200;
      break;
  }

  // Mostrar el resultado en el contenedor del Total
  totalValue.textContent = resultado;
  totalContainer.style.display = "block";
}

// Función para validar el formulario antes de calcular el Total
function validarFormulario() {
    const nombre = nombre_form.value.trim();
    const apellido = apellido_form.value.trim();
    const correo = correo_form.value.trim();
  
    const regex = /^[a-zA-Z\s]+$/;
  
    if (!regex.test(nombre)) {
      alert("Por favor, ingresar solo letras en el campo de nombre.");
      return;
    }
  
    if (!regex.test(apellido)) {
      alert("Por favor, ingresar solo letras en el campo de apellido.");
      return;
    }
  
    if (!correo.match(/^[a-zA-Z0-9_]+@[a-zA-Z]+(\.[A-Za-z]+)+$/)) {
        alert("Por favor, ingresar un correo válido.");
        return;
    }
      
    calcularTotal();
  }
  

// Función para borrar los valores del formulario
function borrarValores() {
    nombre_form.value = "";
    apellido_form.value = "";
    correo_form.value = "";
    totalValue.textContent = "0";
    cantidadInput.value = "";
    categoriaSelect.value = "1";
    
  }


botonTotal.addEventListener("click", validarFormulario);

botonBorrar.addEventListener("click", borrarValores);



