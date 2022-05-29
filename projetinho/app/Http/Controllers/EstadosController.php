<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ModelEstados;
use Log;

class EstadosController extends Controller
{
    public function listagem() {
        DB::connection()->enableQueryLog();
        
        if (view()->exists('estados.listagem')) {
            $estados = ModelEstados::all();
            Log::info(
                DB::getQueryLog()
            );
            //dd($produtos);
            return view('estados.listagem', 
            ['estados' => $estados]);
        } else {
            return 'Página não encontrada.';
        }
        
    }
}