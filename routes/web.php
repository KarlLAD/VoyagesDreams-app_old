<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VoyagesDreamsController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
                        });

Route::get('/accueil',
    function () {
        return view('accueil');

          } );
Route::get('/client',
    function () {
        return view('client');

          } );


          //lister les produits
Route::get('/index', [VoyagesDreamsController::class, 'index'])->name('index');

// Route::get('/index', function () {
//     return view('index', ['slot' => Product::all()]);
// });


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';