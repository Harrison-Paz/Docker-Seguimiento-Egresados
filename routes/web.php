<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Administracion\UserController;


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
//Route::get('/', function () {
//  return view('index');
//});

//Rutas de Acceso y logeo
//Route::view('/', 'welcome');

Route::view('login', 'login/login')->name('login')->middleware('guest'); // acceso solo para usuarios no autentificados
Route::view('/', 'dashboard')->middleware('auth'); // acceso solo para usuarios autentificados

Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout']);

//Rutas de dashboard

//Rutas para secretaria
route::get('secretaria/gestion-egresados/nuevo', function () {
    return view('secretaria/nuevo');
})->name('agregar-egresados');

route::get('secretaria/gestion-egresados/listar', function () {
    return view('secretaria/listar');
})->name('listar-egresados');

route::get('secretaria/gestion-egresados/editar', function () {
    return view('secretaria/editar');
})->name('editar-egresados');

//rutas investigacion
route::get('secretaria/gestion-investigacion/nuevo', function () {
    return view('secretaria/investigaciones/nuevo');
})->name('agregar-investigacion');

route::get('secretaria/gestion-investigacion/listar', function () {
    return view('secretaria/investigaciones/listar');
})->name('listar-investigacion');

route::get('secretaria/gestion-investigacion/editar', function () {
    return view('secretaria/investigaciones/editar');
})->name('editar-investigacion');

//rutas convenios
route::get('secretaria/gestion-convenios/nuevo', function () {
    return view('secretaria/convenios/nuevo');
})->name('agregar-convenios');

route::get('secretaria/gestion-convenios/listar', function () {
    return view('secretaria/convenios/listar');
})->name('listar-convenios');

route::get('secretaria/gestion-convenios/editar', function () {
    return view('secretaria/convenios/editar');
})->name('editar-convenios');

//rutas reconocimientos
route::get('secretaria/gestion-reconocimientos/nuevo', function () {
    return view('secretaria/reconocimientos/nuevo');
})->name('agregar-reconocimientos');

route::get('secretaria/gestion-reconocimientos/listar', function () {
    return view('secretaria/reconocimientos/listar');
})->name('listar-reconocimientos');

route::get('secretaria/gestion-reconocimientos/editar', function () {
    return view('secretaria/reconocimientos/editar');
})->name('editar-reconocimientos');



//Rutas para Egresado
route::get('gestion-ofertas/listar', function () {
    return view('egresado/listar');
})->name('listar-oferta');

route::view('egresado/gestion-formacion/listar', 'egresado/formacion/listar')->name('listar-formacion');
route::view('egresado/gestion-formacion/nuevo', 'egresado/formacion/nuevo')->name('agregar-formacion');
route::view('egresado/gestion-formacion/editar', 'egresado/formacion/editar')->name('editar-formacion');



//Route::get('administrador/gestion-usuarios/nuevo', [UserController::class, 'create'])->name('agregar-usuario');
Route::resource('administrador/gestion-usuarios', UserController::class)->names([
    'create' => 'agregar-usuario',
    'store' => 'guardar-usuario',
    'index' => 'listar-usuario'
]);




