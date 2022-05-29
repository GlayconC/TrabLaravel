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

    public function deletar($id) {
        DB::connection()->enableQueryLog();
        
        if (view()->exists('pessoas.listagem')) {
            ModelPessoas::findOrFail($id)->delete();

           return redirect('/pessoas');
        } else {
            return 'Página não encontrada.';
        }
        
    }

    public function editar($id) {
        DB::connection()->enableQueryLog();
        
        if (view()->exists('pessoas.listagem')) {
            $pessoas = ModelPessoas::findOrFail($id);

           return view('pessoas.edit', ['pessoas' => $pessoas]);
        } else {
            return 'Página não encontrada.';
        }
    }

    public function update(Request $request, $id) {
        DB::connection()->enableQueryLog();
        
        if (view()->exists('pessoas.listagem')) {

            $pessoa = ModelPessoas::find($id);

            $pessoa->update($request->all());

           return redirect('/pessoas');
        } else {
            return 'Página não encontrada.';
        }
    }

}