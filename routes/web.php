<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });


//--------------ROUTE FOR BLADE VIEW WITH BOOTSTRAP 4 DATATABLES 
Route::get('/', 'CustomerController@index');

//--------------ROUTE FOR BLADE VIEW WITH YAJRA DATATABLES
Route::get('yajra-datatables', 'CustomerController@yajra_datatables');
Route::get('customers', 'CustomerController@get_customer')->name('get.customers');

//--------------ROUTES FOR EXPORT BUTTONS
Route::get('excel-download', 'CustomerController@excel_download');
Route::get('pdf-download', 'CustomerController@pdf_download');
