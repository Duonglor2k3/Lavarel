<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
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
Route::get('products', [ProductsController::class, 'index']);
Route::get('/', function () {
	return env('MY_NAME');
});
Route::get('/foods', function () {
	return ['sushi' , 'pizza']; // return array
});
Route::get('/aboutMe', function () {
		return response()->json([
			'name' => 'John Doe',
			'age' => 30
		]);
});