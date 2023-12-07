<?php

use App\Patterns\Behavioral\TestBehavioral;
use App\Patterns\Creational\TestCreational;
use App\Patterns\Structural\TestStructural;
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
    (new TestCreational())->init();
    (new TestStructural())->init();
    (new TestBehavioral())->init();
});
