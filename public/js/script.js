//Funciones INDEX 1//

let clicks = 0;
let cambios = document.getElementById('contador');
function calcularmas() {
    clicks++;
    cambios.innerHTML = clicks;
    if (clicks == 20) {
        alert('Llegaste al 20 redirigiendo al siguiente formulario...');
        window.location.href = 'http://localhost/Parcial2DW/CFormsF1';
    }
}

function calcularmenos() {
    clicks--;
    cambios.innerHTML = clicks;
    if (clicks < 0) {
        clicks = 0;
        cambios.innerHTML = clicks;
        alert('No señor no puede tener menores de 0');
    }
}


//Funciones INDEX 2//
function convertir() {
    let valor = document.getElementById("valor").value;
    let monedaOrigen = document.getElementById("monedaOrigen").value;
    let monedaDestino = document.getElementById("monedaDestino").value;
    let conversion;
    if (valor >= "500"){
        alert("Con $500 te alcanzó para comprar un redireccionador jaja");
        window.location.href = 'http://localhost/Parcial2DW/CResultF1';
    } else if (monedaOrigen === "USD" && monedaDestino === "EUR") {
        conversion = valor * 0.93;
    } else if (monedaOrigen === "EUR" && monedaDestino === "USD") {
        conversion = valor * 1.1;
    } else if (monedaOrigen === "EUR" && monedaDestino === "EUR") {
        alert("Error. Pa que quieres converir lo mismo");
    } else if (monedaDestino === "USD" && monedaDestino === "USD"){
        alert("Error. Pa que quieres converir lo mismo");
    }
    document.getElementById("resconversion").innerHTML = "La conversión es de : " + conversion.toFixed(2);
}

//Funciones INDEX3//


let turno = "X";
let juegoActivo = true;

const celdas = Array.from(document.querySelectorAll(".celda"));
const botonJugar = document.getElementById("boton-jugar");
const botonReiniciar = document.getElementById("boton-reiniciar");
const divMensaje = document.getElementById("mensaje");

botonReiniciar.addEventListener("click", reiniciarJuego);
botonJugar.addEventListener("click", jugarTurno);

function jugarTurno() {
  if (!juegoActivo) return;

  const celdaSeleccionada = celdas.find(celda => celda.value === "X");
  if (!celdaSeleccionada) {
    alert("Por favor, selecciona una casilla para colocar tu 'X'.");
    return;
  }

  if (celdaSeleccionada.value !== "X") {
    alert("Por favor, coloca tu 'X' en una casilla vacía.");
    return;
  }

  colocarO();
}

function colocarO() {
  const celdasVacias = celdas.filter(celda => !celda.value);
  if (celdasVacias.length > 0) {
    const celdaAleatoria = celdasVacias[Math.floor(Math.random() * celdasVacias.length)];
    celdaAleatoria.value = "O";
    turno = "X"; 
    verificarGanador();
  }
}
function verificarGanador() {
  const patronesGanadores = [
    [0, 1, 2],
    [3, 4, 5], 
    [6, 7, 8], 
    [0, 3, 6], 
    [1, 4, 7], 
    [2, 5, 8], 
    [0, 4, 8], 
    [2, 4, 6], 
  ];

  for (let patron of patronesGanadores) {
    const [a, b, c] = patron;
    if (celdas[a].value && celdas[a].value === celdas[b].value && celdas[a].value === celdas[c].value) {
      juegoActivo = false;
      divMensaje.textContent = `${celdas[a].value} ha ganado!`;
      return;
    }
  }

  if (celdas.every(celda => celda.value)) {
    divMensaje.textContent = "¡Es un empate!";
  } else {
    divMensaje.textContent = `Es el turno de ${turno}`;
  }
}

function reiniciarJuego() {
  celdas.forEach(celda => celda.value = "");
  juegoActivo = true;
  divMensaje.textContent = "";
  turno = "X";
}

function red1(){
    window.location.href = 'http://localhost/Parcial2DW/CVistasF1';
}

function red2(){
    window.location.href = 'http://localhost/Parcial2DW/CFormsF1';
}