<?php

use App\Http\Livewire\Authentication\RegistrationFormComponent;
use App\Http\Livewire\Counter\CounterIndexComponent;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('counter', CounterIndexComponent::class);
Route::get('register', RegistrationFormComponent::class);
