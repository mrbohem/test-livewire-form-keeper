<?php
use App\Livewire\Dashboard;
use App\Livewire\Posts;
use App\Livewire\Users;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Dashboard::class);
 
Route::get('/posts', Posts::class);
 
Route::get('/users', Users::class);
