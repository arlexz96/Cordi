<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de la Reserva</title>
</head>
<body>
    <h1>Detalles de la Reserva</h1>
    <p><strong>ID:</strong> {{ $booking->id }}</p>
    <p><strong>Usuario:</strong> {{ $booking->user->name }}</p>
    <p><strong>Evento:</strong> {{ $booking->event->name }}</p>
    <p><strong>Fecha de Creación:</strong> {{ $booking->created_at }}</p>
</body>
</html>
