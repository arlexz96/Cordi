<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Reserva</title>
</head>
<body>
    <h1>Crear Nueva Reserva</h1>
    
    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf
        <label for="id_user">Usuario:</label>
        <input type="number" name="id_user" id="id_user" required>
        <br>
        <label for="id_event">Evento:</label>
        <input type="number" name="id_event" id="id_event" required>
        <br>
        <button type="submit">Guardar Reserva</button>
    </form>
</body>
</html>
