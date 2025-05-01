<?php

namespace App\Services;

use Culqi\Culqi;
use Culqi\CulqiException;
use Culqi\Error\CulqiException as ErrorCulqiException;

class CulqiService
{
    protected $culqi;

    public function __construct()
    {
        $this->culqi = new Culqi(['api_key' => config('services.culqi.secret_key')]);
    }

    /**
     * Crear un cargo en Culqi
     *
     * @param string $token El token de la tarjeta generada por Culqi.js
     * @param int $monto Monto en céntimos (Ej: 10000 para S/100.00)
     * @param string $descripcion Descripción del cobro
     * @param string $email Correo del cliente
     * @return array|null
     */
    public function crearCargo($token, $monto, $descripcion, $email)
    {
        try {
            return $this->culqi->Charges->create([
                'amount' => $monto,
                'currency_code' => 'PEN',
                'email' => $email,
                'source_id' => $token,
                'description' => $descripcion,
            ]);
        } catch (ErrorCulqiException $e) {
            return ['error' => $e->getMessage()];
        }
    }
}
