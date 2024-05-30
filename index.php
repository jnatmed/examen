<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Formulario de Contacto</title>
</head>
<body>
    <header>
        <h1>Formularios de Entrada y Busqueda</h1>
    </header>
    
    <main>
        <form action="/procesar_contacto.php" method="post" class="form-entrada">
            <label for="nombre">Nombre: </label>
            <input type="text" id="nombre" name="nombre" required>
            <label for="email">Email: </label>
            <input type="text" id="email-entrada" name="email" required>
            <label for="mensaje">Mensaje: </label>
            <textarea type="text" id="mensaje" name="mensaje" required></textarea>
            <input type="submit" value="Enviar">
        </form>

        <form action="/buscar_mensajes.php" method="post" class="form-busqueda">
            <label for="email">Email: </label>
            <input type="email" id="email-busqueda" name="email">
            <input type="submit" value="Enviar">
        </form>
    </main>

</body>
</html>