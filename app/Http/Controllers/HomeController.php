<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        return view('seccion-principal.index');
    }

    public function reservar(Request $request)
    {
        $dFechaCheckIn = $request->input('dFechaCheckIn', Carbon::today()->toDateString());
        $dFechaCheckOut = $request->input('dFechaCheckOut', Carbon::tomorrow()->toDateString());
    
        return redirect()->route('reserva')->with([
            'dFechaCheckIn' => $dFechaCheckIn,
            'dFechaCheckOut' => $dFechaCheckOut,
            'nAdultos' => 0,
            'nNinos' => null,
            'nHabitaciones' => 0,
        ]);
    }

    public function search(Request $request)
    {
        $dFechaCheckIn = $request->input('dFechaCheckIn');
        $dFechaCheckOut = $request->input('dFechaCheckOut');
        $nAdultos = $request->input('nAdultos');
        $nNinos = $request->input('nNinos');
        $nHabitaciones = $request->input('nHabitaciones');

        return redirect()->route('reserva')->with([
            'dFechaCheckIn' => $dFechaCheckIn,
            'dFechaCheckOut' => $dFechaCheckOut,
            'nAdultos' => $nAdultos,
            'nNinos' => $nNinos,
            'nHabitaciones' => $nHabitaciones,
        ]);
    }

    public function reservas(Request $request)
    {
        // Obtener los parámetros de entrada desde la sesión
        $dFechaCheckIn = session('dFechaCheckIn');
        $dFechaCheckOut = session('dFechaCheckOut');

        // Construir la URL del endpoint utilizando la variable de entorno
        $apiUrl = env('API_URL') . '/api/web/reserva/habitaciones';

        // Hacer la solicitud al endpoint
        $response = Http::get($apiUrl, [
            'dpFechaCheckIn' => $dFechaCheckIn,
            'dpFechaCheckOut' => $dFechaCheckOut,
        ]);

        // Verificar si la solicitud fue exitosa
        if ($response->successful()) {
            // Decodificar la respuesta JSON y obtener lstTiposHabitacion
            $data = $response->json();
            $lstTiposHabitacion = $data['lstHabitacionesAgrupadas'];
        } else {
            // Manejar el error si la solicitud no fue exitosa
            $lstTiposHabitacion = [];
        }

        // Pasar los datos a la vista junto con el componente Livewire
        return view('reservas.index', [
            'dFechaCheckIn' => $dFechaCheckIn,
            'dFechaCheckOut' => $dFechaCheckOut,
            'nAdultos' => session('nAdultos'),
            'nNinos' => session('nNinos'),
            'nHabitaciones' => session('nHabitaciones'),
            'lstTiposHabitacion' => $lstTiposHabitacion
        ]);
    }
}
