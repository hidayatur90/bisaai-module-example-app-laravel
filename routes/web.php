<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

Route::get('/', [
    EmployeeController::class, 'get_all_employees'
]);

Route::get('/addEmployee', function () {
    return view('addEmployee');
});

Route::patch(
    '/addEmployee/store', 
    [EmployeeController::class, 'store_employee']
);

