<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Produto;
use Log;

class ProdutosController extends Controller
{
    public function listagem() {
        DB::connection()->enableQueryLog();
        
        if (view()->exists('produto.listagem')) {
            $produtos = Produto::all();
            Log::info(
                DB::getQueryLog()
            );
            //dd($produtos);
            return view('produto.listagem', 
            ['produtos' => $produtos]);
        } else {
            return 'Página não encontrada.';
        }
        
    }

    public function deletar($id) {
        DB::connection()->enableQueryLog();
        
        if (view()->exists('produto.listagem')) {
           Produto::findOrFail($id)->delete();

           return redirect('/produtos');
        } else {
            return 'Página não encontrada.';
        }
        
    }
}
