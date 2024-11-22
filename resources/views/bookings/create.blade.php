<!-- resources/views/bookings/create.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Reserva</title>
</head>
<body>
    <h1>Crear una nueva reserva</h1>

    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf
        
        <!-- Campo oculto para el id_event -->
        <input type="hidden" name="id_event" value="{{ $event_id }}">

        <label for="id_user">Usuario:</label>
        <input type="text" name="id_user" id="id_user" required>

        <button type="submit">Confirmar Reserva</button>
    </form>
</body>
</html>
