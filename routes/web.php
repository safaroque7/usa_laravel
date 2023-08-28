<?php

use App\Models\Client;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\crudController;


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
    $clients = Client::all();

    return view('welcome', [
        'kamals' => $clients,
    ]);
});

Route::get('/addClients', function () {
    return view('/layouts/addClients');
});

Route::get('/settings', function () {
    return view('layouts.settings');
});

Route::post('/client-add', [ClientController::class, 'addClintMethod'])->name('addClientsRoute');
Route::post('/', [ClientController::class, 'welcomeMethod'])->name('welcome');
Route::get('/edit/{id}', [crudController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [crudController::class, 'update'])->name('updateRouter');
Route::post('/delete/{id}', [crudController::class, 'delete'])->name('deleteRouter');
Route::get('/show/{id}', [crudController::class, 'show'])->name('showRouter');

Route::post('image-upload', [crudController::class, 'imageUpload'])->name('image.store');
