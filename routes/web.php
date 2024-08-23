<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar las rutas web para tu aplicación.
| Estas rutas se cargan mediante el RouteServiceProvider y se asignan
| al grupo de middleware "web". ¡Haz algo increíble!
|
*/

// Ruta para la página de inicio
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Ruta para mostrar la página de inicio de sesión
Route::get('/login', function () {
    return view('login');
})->name('login');

// Ruta para manejar el envío del formulario de inicio de sesión
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Ruta para manejar el cierre de sesión
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Ruta para mostrar el dashboard después del inicio de sesión
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');
