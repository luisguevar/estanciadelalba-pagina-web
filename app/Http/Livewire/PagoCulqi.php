<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class PagoCulqi extends Component
{
    public $token;
    public $email;
    public $amount;
    public $procesando = false;
    protected $listeners = ['procesarPago'];

    public function procesarPago($token)
    {
        $this->procesando = true;

        $this->token = $token;
        $this->email = auth()->user()->email ?? 'cliente@example.com';
        $this->amount = 10000; // Monto en centavos (S/ 100.00)

        $response = Http::withHeaders([
            'Authorization' => 'Bearer sk_test_d50b5c53af47f11c',
            'Content-Type' => 'application/json'
        ])->withOptions([
            'verify' => false // 🔴 Deshabilita la verificación SSL en localhost
        ])->post('https://api.culqi.com/v2/charges', [
            'amount' => $this->amount,
            'currency_code' => 'PEN',
            'email' => $this->email,
            'source_id' => $this->token,
            'capture' => true,
            'description' => 'Pago de prueba',
            'metadata' => ['dni' => '70202170'],
            'antifraud_details' => [
                'address' => 'Avenida Lima 213',
                'address_city' => 'Lima',
                'country_code' => 'PE',
                'first_name' => 'Richard',
                'last_name' => 'Hendricks',
                'phone_number' => '999999987'
            ]
        ]);

        if ($response->successful()) {
            $data = $response->json();
            session()->flash('message', 'Pago realizado con éxito.');
            
        } else {
            session()->flash('error', 'Error en el pago: ' . $response->body());
        }

        $this->procesando = false;
    }

    public function render()
    {
        return view('livewire.pago-culqi');
    }
}
