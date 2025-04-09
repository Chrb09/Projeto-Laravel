<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Models\Pessoa;
use Illuminate\Http\Request;

Route::get('/', function () {

    return redirect()->route('listar');
});

Route::get('/listar', function () {
    $pessoas = Pessoa::all();

    return view('listar', ['pessoas' => $pessoas]);
})->name('listar');


Route::get('/cadastrar', function () {
    return view('cadastrar');
})->name('cadastrar');

Route::post('/cadastrar-pessoa', function (Request $request) {

    Pessoa::create([
        'nome' => $request->Nome,
        'telefone' => $request->Telefone,
        'origem' => $request->Origem,
        'data' => $request->Data,
        'observacao' => $request->Observacao
    ]);

    return redirect()->route('listar')
        ->with('success', 'Pessoa cadastrada com sucesso!');
});


Route::get('/editar/{id}', function ($Id) {

    $pessoa = Pessoa::find($Id);
    return view('editar', ['pessoa' => $pessoa]);

})->name('editar');

Route::post('/editar-pessoa/{id}', function (Request $request, $Id) {

    $pessoa = Pessoa::find($Id);

    $pessoa->update([
        'nome' => $request->Nome,
        'telefone' => $request->Telefone,
        'origem' => $request->Origem,
        'data' => $request->Data,
        'observacao' => $request->Observacao
    ]);

    return redirect()->route('listar')
        ->with('success', 'Pessoa editada com sucesso!');
});

Route::get('/excluir-pessoa/{id}', function ($Id) {

    $pessoa = Pessoa::find($Id);
    $pessoa->delete();

    return redirect()->route('listar')
        ->with('success', 'Pessoa deletada com sucesso!');

});


