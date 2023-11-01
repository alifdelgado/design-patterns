<?php

use App\Patterns\Creational\AbstractFactory\Client as AbstractClient;
use App\Patterns\Creational\Builder\TestBuilder;
use App\Patterns\Creational\Factory\Client;
use App\Patterns\Creational\Singleton\TestSingleton;
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
    $client->getShape();

    $abstractClient = new AbstractClient();
    $abstractClient->init();

    $testSingleton = new TestSingleton();
    $testSingleton->init();

    $testBuilder = new TestBuilder();
    $testBuilder->init();
});
