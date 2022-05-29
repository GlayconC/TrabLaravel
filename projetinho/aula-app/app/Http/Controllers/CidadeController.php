<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ModelCidade;
use Log;

class CidadeController extends Controller
{
    public function listagem() {
        DB::connection()->enableQueryLog();
        
        if (view()->exists('cidade.listagem')) {
            $cidade = ModelCidade::all();
            Log::info(
                DB::getQueryLog()
            );
            //dd($produtos);
            return view('cidade.listagem', 
            ['cidade' => $cidade]);
        } else {
            return 'Página não encontrada.';
        }
        
    }

    public function deletar($id) {
        DB::connection()->enableQueryLog();
        
        if (view()->exists('cidade.listagem')) {
            ModelCidade::findOrFail($id)->delete();

           return redirect('/cidades');
        } else {
            return 'Página não encontrada.';
        }
        
    }
}