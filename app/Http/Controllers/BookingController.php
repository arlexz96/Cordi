<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // Mostrar todos los bookings
    public function index()
    {
        $bookings = Booking::all();
        return view('bookings.index', compact('bookings'));
    }

    // Mostrar el formulario de creación de reserva
    public function create()
    {
        return view('bookings.create');
    }

    // Almacenar una nueva reserva
    public function store(Request $request)
    {
        $request->validate([
            'id_user' => 'required|exists:users,id',
            'id_event' => 'required|exists:events,id',
        ]);

        Booking::create($request->all());

        return redirect()->route('bookings.index')->with('success', 'Reserva creada exitosamente.');
    }

    // Mostrar los detalles de una reserva
    public function show($id)
    {
        $booking = Booking::findOrFail($id);
        return view('bookings.show', compact('booking'));
    }
}
