<?php

use App\Patterns\AbstractFactory\Client as AbstractClient;
use App\Patterns\Factory\Client;
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
    $client = new Client();
    $client->init();
    $client->getShape('circle');

    $abstractClient = new AbstractClient();
    $abstractClient->init();
});
