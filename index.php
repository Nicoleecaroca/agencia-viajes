<?php
session_start();

function mostrarNotificacionOferta() {
    echo "<script>
            alert('¡Oferta especial! 20% de descuento en paquetes a Europa por tiempo limitado.');
          </script>";
}

if (!isset($_SESSION['notificacion_mostrada'])) {
    mostrarNotificacionOferta();
    $_SESSION['notificacion_mostrada'] = true;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agencia de Viajes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Buscar tu viaje ideal</h1>
    <form action="procesar_filtro.php" method="post">
        <label>Nombre del Hotel:
            <input type="text" name="nombreHotel" required>
        </label>
        <label>Ciudad:
            <input type="text" name="ciudad" required>
        </label>
        <label>País:
            <input type="text" name="pais" required>
        </label>
        <label>Fecha de viaje:
            <input type="date" name="fechaViaje" required>
        </label>
        <label>Duración del viaje (días):
            <input type="number" name="duracion" required>
        </label>
        <button type="submit">Buscar Paquetes</button>
    </form>
</body>
</html>
