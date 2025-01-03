<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/styles.css">
</head>
<body>
    <h1>Conversor de Monedas</h1>
    <input id="valor" type="number" placeholder="Ingrese su valor a convertir">
    <br>
    <select id="monedaOrigen">
        <option value="USD">Dolar</option>
        <option value="EUR">Euro</option>
    </select>
    <h2>Convertir a</h2>
    <br>
    <select id="monedaDestino">
        <option value="USD">Dolar</option>
        <option value="EUR">Euro</option>
    </select>
    <br>
    <button type="button" onclick="convertir()" class="btn btn-primary">Convertir</button>
    <h2>Euro = 1.10 Dolar</h2>
    <h2>Dolar = 0.93 Euro</h2>
    <h1 id="resconversion"> La conversion es de: </h1>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="public/js/script.js"></script>
</html>