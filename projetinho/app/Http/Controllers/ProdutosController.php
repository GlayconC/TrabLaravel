<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ModelProdutos;
use Log;

class ProdutosController extends Controller
{
    public function listagem() {
        DB::connection()->enableQueryLog();
        
        if (view()->exists('produto.listagem')) {
            $produtos = ModelProdutos::all();
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
}