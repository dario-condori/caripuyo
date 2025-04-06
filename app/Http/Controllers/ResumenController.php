<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumenController extends Controller
{
    public function resumen()
    {
        return view('admin.resumen');
    }
}
