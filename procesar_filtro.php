<?php
require_once("FiltroViaje.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filtro = new FiltroViaje(
        $_POST['nombreHotel'],
        $_POST['ciudad'],
        $_POST['pais'],
        $_POST['fechaViaje'],
        $_POST['duracion']
    );

    echo "<h2>Resultado de la búsqueda:</h2>";
    echo "<p>" . $filtro->buscarPaquetes() . "</p>";
    echo "<a href='index.php'>Volver</a>";
}
?>
