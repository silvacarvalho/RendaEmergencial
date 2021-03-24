<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServidorController;
use App\Http\Controllers\FamiliaController;
use App\Http\Controllers\ComposicaoFamiliarController;
use App\Http\Controllers\InformacaoComplementarController;

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
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/servidores', [ServidorController::class, 'index'])->name('s-index');
Route::get('/servidores/cadastrar', [ServidorController::class, 'create'])->name('s-criar-view');
Route::get('/servidores/lista', [ServidorController::class, 'lista'])->name('s-lista');
Route::post('/servidores/cadastrar', [ServidorController::class, 'store'])->name('s-cadastrar');

Route::get('/familia', [FamiliaController::class, 'index'])->name('f-index');
Route::get('/familia/cadastrar', [FamiliaController::class, 'create'])->name('f-criar-view');
Route::get('/familia/{id}/composicao', [FamiliaController::class, 'composicaoFamiliar'])->name('f-criar-view-composicao');
Route::get('/familia/lista', [FamiliaController::class, 'lista'])->name('f-lista');
Route::post('/familia/store', [FamiliaController::class, 'store'])->name('f-cadastrar');

Route::post('/composicao/familia', [ComposicaoFamiliarController::class, 'store'])->name('composicao-cadastrar');
Route::post('/familia/habitacao', [InformacaoComplementarController::class, 'habitacao'])->name('habitacao-cadastrar');
Route::post('/familia/beneficios', [InformacaoComplementarController::class, 'beneficios'])->name('beneficios-cadastrar');
Route::post('/familia/complementares', [InformacaoComplementarController::class, 'complementares'])->name('complementares-cadastrar');
