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
    return view('inicio');
});

Route::get('/cadastrar', function () {
    return view('cadastrar');
});

Route::post('/cadastrar-pessoa', function (Request $request) {

    Pessoa::create([
        'nome' => $request->Nome,
        'telefone' => $request->Telefone,
        'origem' => $request->Origem,
        'data' => $request->Data,
        'observacao' => $request->Observacao
    ]);

    echo "Pessoa cadastrada com sucesso!";
});

Route::get('/listar-pessoa/{id}', function ($Id) {

    $pessoa = Pessoa::find($Id);
    return view('listar', ['pessoa' => $pessoa]);

});


Route::get('/editar-pessoa/{id}', function ($Id) {

    $pessoa = Pessoa::find($Id);
    return view('editar', ['pessoa' => $pessoa]);

});

Route::post('/editar-pessoa/{id}', function (Request $request, $Id) {

    $pessoa = Pessoa::find($Id);

    Pessoa::update([
        'nome' => $request->Nome,
        'telefone' => $request->Telefone,
        'origem' => $request->Origem,
        'data' => $request->Data,
        'observacao' => $request->Observacao
    ]);

    echo "Pessoa editada com sucesso!";
});

Route::get('/excluir-pessoa/{id}', function ($Id) {

    $pessoa = Pessoa::find($Id);
    $pessoa->delete();

    echo "Pessoa deletada com sucesso!";

});


