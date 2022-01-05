<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Administracion\UserController;
use App\Http\Controllers\Secretaria\EgresadoController;
use App\Http\Controllers\AcademicaController;
use App\Http\Controllers\ReconocimientoController;
use App\Http\Controllers\InvestigaController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\OfertaController;

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

Route::view('login', 'login/login')->name('login')->middleware('guest'); // acceso solo para usuarios no autentificados
Route::view('/', 'dashboard')->middleware('auth'); // acceso solo para usuarios autentificados

Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout']);

//Rutas de dashboard
//Rutas gestion egresados
Route::resource('secretaria/gestion-egresados', EgresadoController::class)->names('egresado');

//rutas investigacion
Route::resource('secretaria/gestion-investigacion', InvestigaController::class)->names('investigacion');

//rutas Empresas
Route::resource('secretaria/gestion-empresa', EmpresaController::class)->names('empresa');

//Ofertas
Route::resource('secretaria/gestion-ofertas', OfertaController::class)->names('oferta');

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
Route::resource('secretaria/gestion-reconocimientos', ReconocimientoController::class)->names('reconocimiento');



//Rutas gestion ofertas
route::get('gestion-ofertas/listar', function () {
    return view('egresado/listar');
})->name('listar-oferta');

//Rutas gestion formacion academica
Route::resource('egresados/gestion-formacion', AcademicaController::class)->names('formacion');


//Route::get('administrador/gestion-usuarios/nuevo', [UserController::class, 'create'])->name('agregar-usuario');
Route::resource('administrador/gestion-usuarios', UserController::class)->names([
    'create' => 'agregar-usuario',
    'store' => 'guardar-usuario',
    'index' => 'listar-usuario',
    'destroy' => 'eliminar-usuario',
    'edit' => 'editar-usuario',
    'update' => 'actualizar-usuario'
]);




