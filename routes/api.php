<?php

use App\Http\Controllers\DinasController;
use App\Http\Controllers\DivisiController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PojokHimsiController;
use App\Http\Controllers\ProkerController;
use App\Http\Controllers\ProkerDinasController;
use App\Http\Controllers\StaffController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('layanans', LayananController::class, [
    'except' => ['show', 'destroy', 'create'],
]);
Route::resource('feedbacks', FeedbackController::class, [
    'only' => ['index', 'store', 'create'],
]);
Route::resource('prokers', ProkerController::class, [
    'except' => ['show', 'destroy', 'create'],
]);
Route::resource('dinas', DinasController::class, [
    'except' => ['show', 'destroy', 'update', 'create'],
]);
Route::resource('proker-dinas', ProkerDinasController::class, [
    'except' => ['show', 'create'],
]);
Route::resource('divisi', DivisiController::class, ['except' => ['create']]);
Route::resource('pojok-himsi', PojokHimsiController::class, [
    'except' => ['destroy', 'show', 'update', 'edit', 'create'],
]);

Route::resource('staffs', StaffController::class, [
    'except' => ['create', 'show', 'update'],
]);
Route::get('staffs/{staffs:slug}', [StaffController::class, 'find']);
Route::put('staffs/{staffs:slug}', [StaffController::class, 'updateBySlug']);

Route::get('dinas/{dinas:slug}', [DinasController::class, 'findBySlug']);
Route::delete('dinas/{dinas:slug}', [DinasController::class, 'destroyBySlug']);
Route::put('dinas/{dinas:slug}', [DinasController::class, 'updateBySlug']);

Route::get('layanans/{layanan:slug}', [LayananController::class, 'findBySlug']);
Route::delete('layanans/{layanan:slug}', [
    LayananController::class,
    'destroyBySlug',
]);

Route::get('prokers/{proker:slug}', [ProkerController::class, 'findBySlug']);
Route::delete('prokers/{proker:slug}', [
    ProkerController::class,
    'destroyBySlug',
]);

Route::delete('pojok-himsi/{pojok_himsi:slug}', [
    PojokHimsiController::class,
    'destroyBySlug',
]);

Route::get('pojok-himsi/{pojok_himsi:slug}', [
    PojokHimsiController::class,
    'findBySlug',
]);

Route::put('pojok-himsi/{pojok_himsi:slug}', [
    PojokHimsiController::class,
    'updateBySlug',
]);