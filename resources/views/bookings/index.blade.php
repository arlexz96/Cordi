<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservas</title>
</head>
<body>
    <h1>Lista de Reservas</h1>
    <a href="{{ route('bookings.create') }}">Crear Reserva</a>
    
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Evento</th>
                <th>Fecha de Creación</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $booking)
            <tr>
                <td>{{ $booking->id }}</td>
                <td>{{ $booking->user->name }}</td>
                <td>{{ $booking->event->name }}</td>
                <td>{{ $booking->created_at }}</td>
                <td>
                    <a href="{{ route('bookings.show', $booking->id) }}">Ver</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
