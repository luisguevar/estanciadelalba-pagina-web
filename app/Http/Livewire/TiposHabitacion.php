<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TiposHabitacion extends Component
{
    use WithPagination; // Esto habilita la paginación

    public $CULQI_PUBLIC_KEY;
    public $CULQI_SECRET_KEY;

    public $token;
    public $email;
    public $amount;
    public $procesando = false;
    protected $listeners = ['procesarPago'];

    public $nAdultos = 0;
    public $nNinos = 0;
    public $dFechaCheckIn;
    public $dFechaCheckOut;
    public $totalHuesped = 0;
    public $lstTiposHabitacion; // Lista de tipos de habitación
    public $selecciones = [];   // Arreglo para almacenar las selecciones del usuario
    public $habitacionesSeleccionadas = []; // Arreglo para almacenar las habitaciones seleccionadas
    public $lstReserva = [];
    public $lstHabitaciones = [];
    public $perPage = 4; // Elementos por página
    public $maximoHuespedes = 0;

    public $bAceptar = false;
    public $bPago = false;

    public $nTotalNoches = 0;
    public $nTotalPrecio = 0;


    public $cResNombreTitular;
    public $cResApellidoTitular;
    public $cResCorreoTitular;
    public $cResNroDocumentoTitular;
    public $cResNroCelularTitular;
    public $cResNroCelularReferencia;
    public $nResNroAdultos;
    public $nResNroNinos = 0;
    public $dResFechaCheckIn;
    public $dResFechaCheckOut;
    public $cResObservaciones;
    public $correoconfirmacion;

    protected $rules = [
        'cResNombreTitular' => 'required|string',
        'cResApellidoTitular' => 'required|string',
        'cResCorreoTitular' => 'required|email',
        'cResNroDocumentoTitular' => 'required|string',
        'cResNroCelularTitular' => 'required|string',
        'nResNroAdultos' => 'required|integer|min:0|max:100',
        /*  'nResNroNinos' => 'required|integer|min:0|max:100', */
        'dResFechaCheckIn' => 'required|date',
        'dResFechaCheckOut' => 'required|date',
        'bAceptar' => 'accepted',
    ];

    public $exito = false;
    public $error = false;

    // El método mount se usa para inicializar datos
    /*  public function mount($lstTiposHabitacion)
    {
        $this->lstTiposHabitacion = collect($lstTiposHabitacion); // Aseguramos que sea una colección
    } */

    public function mount($lstTiposHabitacion)
    {
        $this->CULQI_PUBLIC_KEY = config('services.culqi.public_key');

        // Convertir el array en una colección y paginarla
        $this->lstTiposHabitacion = collect($lstTiposHabitacion);
        /* $this->totalHuesped = $this->nNinos + $this->nAdultos; */
        $this->dResFechaCheckIn = $this->dFechaCheckIn;
        $this->dResFechaCheckOut = $this->dFechaCheckOut;

        if ($this->nNinos > 0) {
            $this->nResNroNinos = $this->nNinos;
        } else {
            $this->nResNroNinos = 0;
        }
        if ($this->nAdultos > 0) {
            $this->nResNroAdultos = $this->nAdultos;
        }
    }

    // Método para seleccionar habitación
    public function seleccionarHabitacion($idTipo)
    {

        $tipo = $this->lstTiposHabitacion->firstWhere('id', $idTipo);
        // Depurar el valor de $tipo
        /*  dd($tipo); */
        if ($tipo['nCantidadHabitaciones'] > 0 && !isset($this->selecciones[$idTipo])) {
            $this->selecciones[$idTipo] = 1;
            $this->habitacionesSeleccionadas[$idTipo] = [$tipo['lstHabitaciones'][0]];
            $this->maximoHuespedes =  $this->maximoHuespedes + $tipo['nNumeroPersonas'];
            $this->nTotalPrecio =  $this->nTotalPrecio + $tipo['nPrecioTotal'];
            $this->nTotalNoches =  $tipo['nTotalNoches'];
        }
    }

    // Método para deseleccionar habitación
    public function deseleccionarHabitacion($idTipo)
    {
        $tipo = $this->lstTiposHabitacion->firstWhere('id', $idTipo);
        unset($this->selecciones[$idTipo]);
        unset($this->habitacionesSeleccionadas[$idTipo]);
        $this->maximoHuespedes =  $this->maximoHuespedes - $tipo['nNumeroPersonas'];
        $this->nTotalPrecio =  $this->nTotalPrecio  - $tipo['nPrecioTotal'];
    }

    // Método para aumentar la cantidad de habitaciones seleccionadas
    public function aumentarHabitacion($idTipo)
    {
        $tipo = $this->lstTiposHabitacion->firstWhere('id', $idTipo);

        if ($this->selecciones[$idTipo] < $tipo['nCantidadHabitaciones']) {
            $this->selecciones[$idTipo]++;
            $this->habitacionesSeleccionadas[$idTipo][] = $tipo['lstHabitaciones'][$this->selecciones[$idTipo] - 1];
            $this->maximoHuespedes =  $this->maximoHuespedes + $tipo['nNumeroPersonas'];
            $this->nTotalPrecio =  $this->nTotalPrecio   + $tipo['nPrecioTotal'];
        }
    }

    // Método para disminuir la cantidad de habitaciones seleccionadas
    public function disminuirHabitacion($idTipo)
    {
        $tipo = $this->lstTiposHabitacion->firstWhere('id', $idTipo);
        if (isset($this->selecciones[$idTipo]) && $this->selecciones[$idTipo] > 0) {
            $this->selecciones[$idTipo]--;
            array_pop($this->habitacionesSeleccionadas[$idTipo]);

            if ($this->selecciones[$idTipo] == 0) {
                unset($this->selecciones[$idTipo]);
                unset($this->habitacionesSeleccionadas[$idTipo]);
            }

            $this->maximoHuespedes =  $this->maximoHuespedes - $tipo['nNumeroPersonas'];
            $this->nTotalPrecio =  $this->nTotalPrecio  -  $tipo['nPrecioTotal'];
        }
    }

    public function continuar()
    {
        $this->lstReserva = [];
        $this->lstHabitaciones = [];

        foreach ($this->selecciones as $idTipo => $cantidad) {
            $tipo = $this->lstTiposHabitacion->firstWhere('id', $idTipo);
            $habitaciones = $this->habitacionesSeleccionadas[$idTipo] ?? [];

            $this->lstReserva[] = [
                'tipo' => $tipo,
                'habitaciones' => $habitaciones
            ];

            // Mapear habitaciones para agregar id, nNroHabitacion y nPrecioTotal
            foreach ($habitaciones as $habitacion) {
                $this->lstHabitaciones[] = [
                    'id' => $habitacion['id'],
                    'nNroHabitacion' => $habitacion['nNroHabitacion'],
                    'nPrecioTotal' => $habitacion['nPrecioTotal'],
                ];
            }
        }

        $this->bPago = true;
    }


    // public function pagar()
    // {
    //     // Validación de datos (si es necesario)
    //     $this->validate();

    //     // Datos a enviar a la API
    //     $data = [
    //         'cResNombreTitular' => $this->cResNombreTitular,
    //         'cResApellidoTitular' => $this->cResApellidoTitular,
    //         'cResCorreoTitular' => $this->cResCorreoTitular,
    //         'cResNroDocumentoTitular' => $this->cResNroDocumentoTitular,
    //         'cResNroCelularTitular' => $this->cResNroCelularTitular,
    //         'cResNroCelularReferencia' => $this->cResNroCelularReferencia,
    //         'nResNroAdultos' => $this->nResNroAdultos,
    //         'nResNroNinos' => $this->nResNroNinos,
    //         'dResFechaCheckIn' => $this->dResFechaCheckIn,
    //         'dResFechaCheckOut' => $this->dResFechaCheckOut,
    //         'cResObservaciones' => $this->cResObservaciones,
    //         'lstHabitaciones' => $this->lstHabitaciones,
    //         'nTotalNoches'=> $this->nTotalNoches,
    //         'nTotalAPagar' => $this->nTotalPrecio,
    //     ];

    //     // Realizar la solicitud POST a la API externa
    //     $response = Http::post(env('API_URL') . '/api/web/reserva/save', $data);

    //     // Depuración de la respuesta
    //     /*  dd($response->json()); // Esto mostrará la respuesta de la API */
    //     dd($this->lstHabitaciones); // Esto mostrará la respuesta de la API


    //     // Si la respuesta es exitosa, puedes manejar la lógica aquí
    //     if ($response->successful()) {
    //         // Aquí se puede manejar la respuesta exitosa
    //         return response()->json([
    //             'success' => true,
    //             'message' => 'Reserva registrada con éxito',
    //             'data' => $response->json() // Datos de la respuesta de la API
    //         ]);
    //     }

    //     // Manejar errores si la solicitud falla
    //     return response()->json([
    //         'success' => false,
    //         'message' => 'Error al registrar la reserva',
    //         'error' => $response->json() // Datos del error de la API
    //     ], 400);
    // }



    public function procesarPago($token)
    {
        $this->token = $token;
        $this->email = $this->cResCorreoTitular;
        $this->amount = $this->nTotalPrecio * 100;


        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . config('services.culqi.secret_key'),
            'Content-Type' => 'application/json'
        ])->withOptions([
            'verify' => false
        ])->post('https://api.culqi.com/v2/charges', [
            'amount' => $this->amount,
            'currency_code' => 'PEN',
            'email' => $this->email,
            'source_id' => $this->token,
            'capture' => true,
            'description' => 'Reserva Web',
            'metadata' => ['dni' => $this->cResNroDocumentoTitular],
            'antifraud_details' => [
                'first_name' => $this->cResNombreTitular,
                'last_name' => $this->cResApellidoTitular,
                'phone_number' => $this->cResNroCelularTitular,
            ]
        ]);

        $result = $response->json();

        if ($response->failed()) {
            $this->exito = false;
            $this->error = true;
            return response()->json([
                'success' => false,
                'message' => $result['user_message'] ?? 'No se pudo procesar el pago',
                'error' => $result
            ], 400);
        }

        $referenceCode = $result['reference_code'] ?? null;

        $ninos = 0;
        if ((int)$this->nResNroNinos > 0) {
            $ninos = (int)$this->nResNroNinos;
        }

        $data = [
            'cResNombreTitular' => $this->cResNombreTitular,
            'cResApellidoTitular' => $this->cResApellidoTitular,
            'cResCorreoTitular' => $this->cResCorreoTitular,
            'cResNroDocumentoTitular' => $this->cResNroDocumentoTitular,
            'cResNroCelularTitular' => $this->cResNroCelularTitular,
            'cResNroCelularReferencia' => $this->cResNroCelularReferencia,
            'nResNroAdultos' => $this->nResNroAdultos,
            'nResNroNinos' => $ninos,
            'dResFechaCheckIn' => $this->dResFechaCheckIn,
            'dResFechaCheckOut' => $this->dResFechaCheckOut,
            'cResObservaciones' => $this->cResObservaciones,
            'lstHabitaciones' => $this->lstHabitaciones,
            'nTotalNoches' => $this->nTotalNoches,
            'nTotalAPagar' => $this->nTotalPrecio,
            'cCodigoPagoReferencia' => $referenceCode
        ];
        $responseApi = Http::post(env('API_URL') . '/api/web/reserva/save', $data);


        if ($responseApi->successful()) {
            $this->exito = true;
            return response()->json([
                'success' => true,
                'message' => 'Reserva registrada con éxito',
                'data' => $responseApi->json()
            ]);
        }


        $this->exito = false;
        $this->error = true;
        return response()->json([
            'success' => false,
            'message' => 'Error al registrar la reserva',
            'error' => $responseApi->json()
        ], 400);
    }


    // public function pagar()
    // {
    //     // Validación de datos (si es necesario)
    //     $this->validate();

    //     // Datos a enviar a la API
    //     $data = [
    //         'cResNombreTitular' => $this->cResNombreTitular,
    //         'cResApellidoTitular' => $this->cResApellidoTitular,
    //         'cResCorreoTitular' => $this->cResCorreoTitular,
    //         'cResNroDocumentoTitular' => $this->cResNroDocumentoTitular,
    //         'cResNroCelularTitular' => $this->cResNroCelularTitular,
    //         'cResNroCelularReferencia' => $this->cResNroCelularReferencia,
    //         'nResNroAdultos' => $this->nResNroAdultos,
    //         'nResNroNinos' => $this->nResNroNinos,
    //         'dResFechaCheckIn' => $this->dResFechaCheckIn,
    //         'dResFechaCheckOut' => $this->dResFechaCheckOut,
    //         'cResObservaciones' => $this->cResObservaciones,
    //         'lstHabitaciones' => $this->lstHabitaciones,
    //         'nTotalNoches' => $this->nTotalNoches,
    //         'nTotalAPagar' => $this->nTotalPrecio,
    //     ];

    //     // Realizar la solicitud POST a la API externa
    //     $response = Http::post(env('API_URL') . '/api/web/reserva/save', $data);

    //     // Si la respuesta es exitosa, establecer la variable $exito en true
    //     if ($response->successful()) {
    //         $this->exito = true; // Variable para indicar que la operación fue exitosa
    //         return response()->json([
    //             'success' => true,
    //             'message' => 'Reserva registrada con éxito',
    //             'data' => $response->json() // Datos de la respuesta de la API
    //         ]);
    //     }

    //     // Manejar errores si la solicitud falla
    //     $this->exito = false; // En caso de error, la variable se mantiene en false
    //     $this->error = true;
    //     return response()->json([
    //         'success' => false,
    //         'message' => 'Error al registrar la reserva',
    //         'error' => $response->json() // Datos del error de la API
    //     ], 400);
    // }

    public function render()
    {
        // Paginar manualmente
        $paginatedItems = $this->lstTiposHabitacion->forPage($this->currentPage, $this->perPage);

        // Crear el paginator
        $tiposHabitacion = new LengthAwarePaginator(
            $paginatedItems,
            $this->lstTiposHabitacion->count(),
            $this->perPage,
            $this->currentPage,
            ['path' => Paginator::resolveCurrentPath()]
        );

        return view('livewire.tipos-habitacion', [
            'tiposHabitacion' => $tiposHabitacion,
            'nAdultos' => $this->nAdultos,
            'nNinos' => $this->nNinos,
        ]);
    }


    public $currentPage;
    // Métodos de paginación
    public function goToPage($page)
    {
        $this->currentPage = $page;
    }
}
