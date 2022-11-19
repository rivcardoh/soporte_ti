<?php

use App\Http\Controllers\AreaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\NegocioController;
use App\Http\Controllers\RegionalController;
use App\Http\Controllers\SubareaController;

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
    return view('welcome');
});

// Rutas persona
Route::get('persona', [PersonaController::class, 'index'])->name('persona');
Route::get('persona/create', [PersonaController::class, 'create'])->name('persona.create');
Route::post('persona/store', [PersonaController::class, 'store'])->name('persona.store');
Route::get('persona/{id}/edit', [PersonaController::class, 'edit'])->name('persona.edit');
Route::put('persona/update', [PersonaController::class, 'update'])->name('persona.update');
Route::get('persona/{id}/show', [PersonaController::class, 'show'])->name('persona.show');
Route::get('persona//{id}destroy', [PersonaController::class, 'destroy'])->name('persona.destroy');

// Rutas usuario
Route::get('usuario', [PersonaController::class, 'index'])->name('usuario');
Route::get('usuario/create', [PersonaController::class, 'create'])->name('usuario.create');
Route::post('usuario/store', [PersonaController::class, 'store'])->name('usuario.store');
Route::get('usuario/{id}/edit', [PersonaController::class, 'edit'])->name('usuario.edit');
Route::put('usuario/update', [PersonaController::class, 'update'])->name('usuario.update');
Route::get('usuario/{id}/show', [PersonaController::class, 'show'])->name('usuario.show');
Route::get('usuario//{id}destroy', [PersonaController::class, 'destroy'])->name('usuario.destroy');

// Rutas regional
Route::get('regional', [RegionalController::class, 'index'])->name('regional');
Route::get('regional/create', [RegionalController::class, 'create'])->name('regional.create');
Route::post('regional/store', [RegionalController::class, 'store'])->name('regional.store');
Route::get('regional/{id}/edit', [RegionalController::class, 'edit'])->name('regional.edit');
Route::put('regional/update', [RegionalController::class, 'update'])->name('regional.update');
Route::get('regional/{id}/show', [RegionalController::class, 'show'])->name('regional.show');
Route::get('regional//{id}destroy', [RegionalController::class, 'destroy'])->name('regional.destroy');

// Rutas negocio
Route::get('negocio', [NegocioController::class, 'index'])->name('negocio');
Route::get('negocio/create', [NegocioController::class, 'create'])->name('negocio.create');
Route::post('negocio/store', [NegocioController::class, 'store'])->name('negocio.store');
Route::get('negocio/{id}/edit', [NegocioController::class, 'edit'])->name('negocio.edit');
Route::put('negocio/update', [NegocioController::class, 'update'])->name('negocio.update');
Route::get('negocio/{id}/show', [NegocioController::class, 'show'])->name('negocio.show');
Route::get('negocio//{id}destroy', [NegocioController::class, 'destroy'])->name('negocio.destroy');

// Rutas area
Route::get('area', [AreaController::class, 'index'])->name('area');
Route::get('area/create', [AreaController::class, 'create'])->name('area.create');
Route::post('area/store', [AreaController::class, 'store'])->name('area.store');
Route::get('area/{id}/edit', [AreaController::class, 'edit'])->name('area.edit');
Route::put('area/update', [AreaController::class, 'update'])->name('area.update');
Route::get('area/{id}/show', [AreaController::class, 'show'])->name('area.show');
Route::get('area//{id}destroy', [AreaController::class, 'destroy'])->name('area.destroy');

// Rutas subarea
Route::get('subarea', [SubareaController::class, 'index'])->name('subarea');
Route::get('subarea/create', [SubareaController::class, 'create'])->name('subarea.create');
Route::post('subarea/store', [SubareaController::class, 'store'])->name('subarea.store');
Route::get('subarea/{id}/edit', [SubareaController::class, 'edit'])->name('subarea.edit');
Route::put('subarea/update', [SubareaController::class, 'update'])->name('subarea.update');
Route::get('subarea/{id}/show', [SubareaController::class, 'show'])->name('subarea.show');
Route::get('subarea//{id}destroy', [SubareaController::class, 'destroy'])->name('subarea.destroy');

// Rutas tipo soporte
Route::get('tipo_soporte', [PersonaController::class, 'index'])->name('tipo_soporte');
Route::get('tipo_soporte/create', [PersonaController::class, 'create'])->name('tipo_soporte.create');
Route::post('tipo_soporte/store', [PersonaController::class, 'store'])->name('tipo_soporte.store');
Route::get('tipo_soporte/{id}/edit', [PersonaController::class, 'edit'])->name('tipo_soporte.edit');
Route::put('tipo_soporte/update', [PersonaController::class, 'update'])->name('tipo_soporte.update');
Route::get('tipo_soporte/{id}/show', [PersonaController::class, 'show'])->name('tipo_soporte.show');
Route::get('tipo_soporte//{id}destroy', [PersonaController::class, 'destroy'])->name('tipo_soporte.destroy');

// Rutas tipo mantenimiento
Route::get('tipo_mantenimiento', [PersonaController::class, 'index'])->name('tipo_mantenimiento');
Route::get('tipo_mantenimiento/create', [PersonaController::class, 'create'])->name('tipo_mantenimiento.create');
Route::post('tipo_mantenimiento/store', [PersonaController::class, 'store'])->name('tipo_mantenimiento.store');
Route::get('tipo_mantenimiento/{id}/edit', [PersonaController::class, 'edit'])->name('tipo_mantenimiento.edit');
Route::put('tipo_mantenimiento/update', [PersonaController::class, 'update'])->name('tipo_mantenimiento.update');
Route::get('tipo_mantenimiento/{id}/show', [PersonaController::class, 'show'])->name('tipo_mantenimiento.show');
Route::get('tipo_mantenimiento//{id}destroy', [PersonaController::class, 'destroy'])->name('tipo_mantenimiento.destroy');

// Rutas rol
Route::get('rol/index', [PersonaController::class, 'index'])->name('rol.index');
Route::get('rol/create', [PersonaController::class, 'create'])->name('rol.create');
Route::post('rol/store', [PersonaController::class, 'store'])->name('rol.store');
Route::get('rol/{id}/edit', [PersonaController::class, 'edit'])->name('rol.edit');
Route::put('rol/update', [PersonaController::class, 'update'])->name('rol.update');
Route::get('rol/{id}/show', [PersonaController::class, 'show'])->name('rol.show');
Route::get('rol//{id}destroy', [PersonaController::class, 'destroy'])->name('rol.destroy');

// Rutas privilegio
Route::get('privilegio/index', [privilegioController::class, 'index'])->name('privilegio.index');
Route::get('privilegio/create', [privilegioController::class, 'create'])->name('privilegio.create');
Route::post('privilegio/store', [privilegioController::class, 'store'])->name('privilegio.store');
Route::get('privilegio/{id}/edit', [privilegioController::class, 'edit'])->name('privilegio.edit');
Route::put('privilegio/update', [privilegioController::class, 'update'])->name('privilegio.update');
Route::get('privilegio/{id}/show', [privilegioController::class, 'show'])->name('privilegio.show');
Route::get('privilegio//{id}destroy', [privilegioController::class, 'destroy'])->name('privilegio.destroy');

// Rutas sistema operativo
Route::get('sistema_operativo/index', [PersonaController::class, 'index'])->name('sistema_operativo.index');
Route::get('sistema_operativo/create', [PersonaController::class, 'create'])->name('sistema_operativo.create');
Route::post('sistema_operativo/store', [PersonaController::class, 'store'])->name('sistema_operativo.store');
Route::get('sistema_operativo/{id}/edit', [PersonaController::class, 'edit'])->name('sistema_operativo.edit');
Route::put('sistema_operativo/update', [PersonaController::class, 'update'])->name('sistema_operativo.update');
Route::get('sistema_operativo/{id}/show', [PersonaController::class, 'show'])->name('sistema_operativo.show');
Route::get('sistema_operativo//{id}destroy', [PersonaController::class, 'destroy'])->name('sistema_operativo.destroy');

// Rutas solicitud ti
Route::get('solicitud/index', [solicitudController::class, 'index'])->name('solicitud.index');
Route::get('solicitud/create', [solicitudController::class, 'create'])->name('solicitud.create');
Route::post('solicitud/store', [solicitudController::class, 'store'])->name('solicitud.store');
Route::get('solicitud/{id}/edit', [solicitudController::class, 'edit'])->name('solicitud.edit');
Route::put('solicitud/update', [solicitudController::class, 'update'])->name('solicitud.update');
Route::get('solicitud/{id}/show', [solicitudController::class, 'show'])->name('solicitud.show');
Route::get('solicitud//{id}destroy', [solicitudController::class, 'destroy'])->name('solicitud.destroy');

// Rutas cronograma
Route::get('cronograma/index', [cronogramaController::class, 'index'])->name('cronograma.index');
Route::get('cronograma/create', [cronogramaController::class, 'create'])->name('cronograma.create');
Route::post('cronograma/store', [cronogramaController::class, 'store'])->name('cronograma.store');
Route::get('cronograma/{id}/edit', [cronogramaController::class, 'edit'])->name('cronograma.edit');
Route::put('cronograma/update', [cronogramaController::class, 'update'])->name('cronograma.update');
Route::get('cronograma/{id}/show', [cronogramaController::class, 'show'])->name('cronograma.show');
Route::get('cronograma//{id}destroy', [cronogramaController::class, 'destroy'])->name('cronograma.destroy');

// Rutas mantenimiento
Route::get('mantenimiento/index', [PersonaController::class, 'index'])->name('mantenimiento.index');
Route::get('mantenimiento/create', [PersonaController::class, 'create'])->name('mantenimiento.create');
Route::post('mantenimiento/store', [PersonaController::class, 'store'])->name('mantenimiento.store');
Route::get('mantenimiento/{id}/edit', [PersonaController::class, 'edit'])->name('mantenimiento.edit');
Route::put('mantenimiento/update', [PersonaController::class, 'update'])->name('mantenimiento.update');
Route::get('mantenimiento/{id}/show', [PersonaController::class, 'show'])->name('mantenimiento.show');
Route::get('mantenimiento//{id}destroy', [PersonaController::class, 'destroy'])->name('mantenimiento.destroy');

// Rutas equipo
Route::get('equipo/index', [PersonaController::class, 'index'])->name('equipo.index');
Route::get('equipo/create', [PersonaController::class, 'create'])->name('equipo.create');
Route::post('equipo/store', [PersonaController::class, 'store'])->name('equipo.store');
Route::get('equipo/{id}/edit', [PersonaController::class, 'edit'])->name('equipo.edit');
Route::put('equipo/update', [PersonaController::class, 'update'])->name('equipo.update');
Route::get('equipo/{id}/show', [PersonaController::class, 'show'])->name('equipo.show');
Route::get('equipo//{id}destroy', [PersonaController::class, 'destroy'])->name('equipo.destroy');