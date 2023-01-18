<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\BeritaController;
use App\Http\Controllers\API\KategoriController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('data-kategori', [KategoriController::class, 'index']);
Route::apiResources([
    'berita' => BeritaController::class,
]);
Route::apiResources(['kategori' => KategoriController::class,]);
Route::post('beritaubah/{id}', [BeritaController::class, 'ubah'])->name('berita.ubah');
