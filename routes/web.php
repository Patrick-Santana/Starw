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
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\TreinadorController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/treinadors/novo', [TreinadorController::class, 'store'])->name('add-treinador');

Route::post('/pokemon/novo', [PokemonController::class, 'store'])->name('add-pokemon');


/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/

Route::get('/dashboard', [HomeController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';
