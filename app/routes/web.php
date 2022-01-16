<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConProdController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/



Route::get('/catalogo' ,[ConProdController::class, 'MenuConProd1'])->name('producto.ConProdAll');
Route::get('producto/addProduct', [ConProdController::class, 'AddProd'])->name('producto.AddProduct');
Route::get('producto/{id}', [ConProdController::class, 'ConProdEsp'])->name('producto.ConEsp');
Route::post('addproduc', [ConProdController::class, 'store'])->name('producto.productStore');
Route::get('producto/{id}/edit', [ConProdController::class, 'edit'])->name('producto.editProd');
Route::put('producto/{id}/update', [ConProdController::class, 'update'])->name('producto.ProdUpdate'); 

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


?>

