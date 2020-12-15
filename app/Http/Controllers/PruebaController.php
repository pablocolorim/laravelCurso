<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PruebaController extends Controller{
    public function prueba(){
        return 'Estoy dentro de pruebaController JuanP';
    }

    public function clientes()
    {
        $clientes = DB::select ('select * from MBA_CLIENTES');
        return view('clientes.index',['clientes'=>$clientes]);
    }
}
