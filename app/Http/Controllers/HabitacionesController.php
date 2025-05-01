<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HabitacionesController extends Controller
{
    public function index()
    {
        return view('seccion-habitaciones.index');
    }

}
