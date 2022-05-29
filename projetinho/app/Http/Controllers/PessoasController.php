<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ModelPessoas;
use Log;

class PessoasController extends Controller
{
    public function listagem() {
        DB::connection()->enableQueryLog();
        
        if (view()->exists('pessoas.listagem')) {
            $pessoas = ModelPessoas::all();
            Log::info(
                DB::getQueryLog()
            );
            //dd($produtos);
            return view('pessoas.listagem', 
            ['pessoas' => $pessoas]);
        } else {
            return 'Página não encontrada.';
        }
        
    }
}