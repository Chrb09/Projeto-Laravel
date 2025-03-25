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

Route::post('cadastrar-produto', function (Request $request) {

    Pessoa::create([
        'nome' => $request->Nome,
        'telefone' => $request->Telefone,
        'origem' => $request->Origem,
        'data' => $request->Data,
        'observacao' => $request->Observacao
    ]);

    echo "Pessoa cadastrada com sucesso!";
});