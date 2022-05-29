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

    public function editar($id) {
        DB::connection()->enableQueryLog();
        
        if (view()->exists('produto.listagem')) {
            $produtos = Produto::findOrFail($id);

           return view('produto.edit', ['produtos' => $produtos]);
        } else {
            return 'Página não encontrada.';
        }
    }

    public function update(Request $request, $id) {
        DB::connection()->enableQueryLog();
        
        if (view()->exists('produto.listagem')) {

            $produto = Produto::find($id);

            $produto->update($request->all());

           return redirect('/produtos');
        } else {
            return 'Página não encontrada.';
        }
    }
}
