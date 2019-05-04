<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
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

Route::get('/', function () {
     return view('auth.login');
 });

// Route::get('/', function () {
//     return Excel::download(new UsersExport, 'users.xls');
// });

Route::resource('usuarios', 'UsuariosController');
Route::resource('nutricion', 'NutricionController');

Auth::routes(['reset'=>false]);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/exportar', 'Controller@exportar')->name('exportar');
