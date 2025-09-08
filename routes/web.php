<?php

use App\Http\Controllers\CommandeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WelcomeController;
use GuzzleHttp\Middleware;
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

Route::get('/',[WelcomeController::class ,'welcome'])->name('welcome');
Route::get('/menu', [MenuController::class, 'menu'])->name('menu');
Route::get('/panier',[PanierController::class,'showPanier'])->name('panier');

Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'processLogin'])->name('login.process');

Route::get('/register',[RegisterController::class,'showRegister'])->name('register');
Route::post('/register',[RegisterController::class,'processForm'])->name('register.process');
Route::get('/commande', [CommandeController::class, 'commande'])->name('commande');
Route::post('/logout',[RegisterController::class,'logout'])->name('logout');
Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard')->middleware('auth');