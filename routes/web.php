<?php

use App\Http\Controllers\FormController;
use App\Models\Students;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FormController::class , 'getForm']);
Route::post('/form', [FormController::class , 'postForm']);


Route::get('/students', function (){


$students =  Students::all();
echo "<pre>";
print_r($students->toArray());




});


Route::get('/show', [FormController::class , 'show']);
Route::get('/student/delete/{studentID}', [FormController::class , 'delete']);