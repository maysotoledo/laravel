<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;


Route::get('/', function () {
    return view('welcome');
});

// gerando array com os nomes das rotas
$arquivosRota = glob(__DIR__ . '/web/*.php'); // Substitua *.php pela extensão desejada
// chamando todas as rotas
foreach ($arquivosRota as $arquivoRota) {
    require $arquivoRota;
}

require __DIR__.'/auth.php';


