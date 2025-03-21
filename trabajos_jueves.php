<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilos.css">
  <title>Registro de Ventas</title>
</head>

<body>
  <div class="container">
    <h2>📖 Registro de Ventas</h2>
    <form action="ventas.php" method="post">
      <div class="form-container">
        <!-- Primera sección: Libro y Fecha -->
        <div class="form-section">
          <label for="libro">Libro:</label>
          <input type="text" id="libro" name="Libro" required>

          <label for="fecha">Fecha:</label>
          <input type="date" id="fecha" name="Fecha" required>
        </div>

        <!-- Separador visual -->
        <div class="divider"></div>

        <!-- Segunda sección: Datos del usuario -->
        <div class="form-section">
          <label for="nombre">Nombre:</label>
          <input type="text" id="nombre" name="Nombre" required>

          <label for="apellido">Apellido:</label>
          <input type="text" id="apellido" name="Apellido" required>

          <label for="telefono">Teléfono:</label>
          <input type="tel" id="telefono" name="Telefono" pattern="[0-9]{10}" placeholder="Ejemplo: 1234567890" required>

          <label for="email">Correo Electrónico:</label>
          <input type="email" id="email" name="Email" placeholder="Ejemplo: correo@dominio.com" required>
        </div>
      </div>

      <input type="submit" value="Vender">
    </form>
  </div>
</body>

</html>
