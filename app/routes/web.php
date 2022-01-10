<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConProdController;

//$con = pg_connect("host='localhost' dbname=ikea2 port=5433 user=postgres password='admin'");




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



Route::get('/' ,[ConProdController::class, 'MenuConProd1'])->name('ConProdAll');
Route::get('producto/addProduct', [ConProdController::class, 'AddProd'])->name('AddProduct');
Route::get('producto/{id}', [ConProdController::class, 'ConProdEsp'])->name('ConEsp');
Route::post('addproduc', [ConProdController::class, 'store'])->name('productStore');
Route::get('producto/{id}/edit', [ConProdController::class, 'edit'])->name('editProd');
Route::put('producto/{id}/update', [ConProdController::class, 'update'])->name('ProdUpdate');

?>