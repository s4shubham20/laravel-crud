<?php
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/showData', [UserController::class, 'ShowData']);
Route::post('/insert_data', [UserController::class, 'Insert_Data']);
Route::get('/fetch_data',[UserController::class, 'Fetch_Data']);
Route::get('/update_data/{id}',[UserController::class, 'Update_Data']);
Route::post('/update',[UserController::class, 'UpdateData']);
Route::get('/delete_data/{id}',[UserController::class, 'DeleteData']);
