<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tres en Raya</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f4f4f9;
    }

    .contenedor-juego {
      text-align: center;
    }

    .tablero {
      display: grid;
      grid-template-columns: repeat(3, 80px);
      grid-gap: 10px;
      margin: 20px 0;
    }

    .celda {
      width: 80px;
      height: 80px;
      font-size: 2em;
      text-align: center;
      border: 2px solid #ccc;
      background-color: #fff;
    }

    button {
      margin: 10px;
      padding: 10px 20px;
      font-size: 1em;
      cursor: pointer;
    }

    button:hover {
      background-color: #ddd;
    }

    #mensaje {
      margin-top: 20px;
      font-size: 1.2em;
      font-weight: bold;
      color: green;
    }
  </style>
</head>
<body>

  <div class="contenedor-juego">
    <h1>Tres en Raya</h1>
    <div class="tablero">
      <input type="text" id="celda-1" class="celda" maxlength="1" />
      <input type="text" id="celda-2" class="celda" maxlength="1" />
      <input type="text" id="celda-3" class="celda" maxlength="1" />
      <input type="text" id="celda-4" class="celda" maxlength="1" />
      <input type="text" id="celda-5" class="celda" maxlength="1" />
      <input type="text" id="celda-6" class="celda" maxlength="1" />
      <input type="text" id="celda-7" class="celda" maxlength="1" />
      <input type="text" id="celda-8" class="celda" maxlength="1" />
      <input type="text" id="celda-9" class="celda" maxlength="1" />
    </div>

    <div class="acciones">
      <button id="boton-jugar">Jugar</button>
      <button id="boton-reiniciar">Reiniciar</button>
      <button onclick="red1()">Formulario 1</button>
      <button onclick="red2()">Formulario 2</button>
    </div>

    <div id="mensaje"></div>
  </div>
  <script src="public/js/script.js"></script>
</body>
</html>
