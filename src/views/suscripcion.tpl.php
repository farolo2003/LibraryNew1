<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="public/images/css/suscripcion.css">
  <title>Formulario de Pago</title>
</head>
<body>
  <div class="container">
    <a href="/catalogo"><---ATRAS</a>
    <h2>30 Días Gratis, luego 8,50€/mes</h2>
    <form action="/suscripcion/suscripcion" method="post">
      <label for="nombre-titular">Nombre del Titular:</label>
      <input type="text" id="nombre-titular" name="nombre-titular" required>

      <label for="numero-tarjeta">Número de Tarjeta:</label>
      <input type="text" id="numero-tarjeta" name="numero-tarjeta"  required>

      <label for="fecha-expiracion">Fecha de Expiración:</label>
      <input type="text" id="fecha-expiracion" name="fecha-expiracion" placeholder="MM/AA" required>

      <label for="cvv">CVV:</label>
      <input type="text" id="cvv" name="cvv" required>

      <button type="submit">SUSCRIBIRSE</button>
    </form>
  </div>
</body>
</html>
