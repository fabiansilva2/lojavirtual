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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    return view('teste');
});*/

/*use App\Http\Controllers\testeController;

route::get('teste', [testeController::class, 'teste']);
*/

use App\Http\Controllers\siteControllers\homeController;
use App\Http\Controllers\siteControllers\produtoController;
use App\Http\Controllers\siteControllers\contatoController;
use App\Http\Controllers\siteControllers\blogController;

route::get('/', [homeController::class, 'index']);
route::get('home', [homeController::class, 'index']);
route::get('produtos', [produtoController::class, 'produto']);
route::get('contatos', [contatoController::class, 'contato']);
route::get('blog', [blogController::class, 'blog']);