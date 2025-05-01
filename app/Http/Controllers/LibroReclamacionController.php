<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LibroReclamacionController extends Controller
{


    public function index()
    {
        $apiUrl = env('API_URL') . '/api/reclamos/registrar';
        return view('libro-reclamaciones.index', compact('apiUrl'));
    }
}
