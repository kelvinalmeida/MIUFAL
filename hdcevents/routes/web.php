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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/cardapio', [EventController::class, 'cardapio']);
Route::get('/fila', [EventController::class, 'fila']);
Route::get('/perfil', [EventController::class, 'perfil']);
Route::get('/alterardados', [EventController::class, 'alterarDados']);
Route::get('/cadastro', [EventController::class, 'cadastro']);

Route::post('/cadastro', [EventController::class, 'store']);
// Route::get('/cardapio', function () {
//     return view('cardapio');
// });

// Route::get('/fila', );


// OS DOIS TIPOPS DE ID (NAs ROTAS)
// ID OBRIGATORIO
// Route::get('/testando_rota/{id}', function ($id) {
//     return view('testando_rota', ['id' => $id]);
// });

// ID OPCIONAL
// Route::get('/testando_rota/{id?}', function ($id = 2) {
//     return view('testando_rota', ['id' => $id]);
// });

// Para URL /testando_rota?search=AnaBeatriz
// Route::get('/testando_rota', function () {

//     $busca = request('search');
//     return view('testando_rota', ['busca' => $busca]);
// });


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
