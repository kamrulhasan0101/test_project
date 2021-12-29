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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/print-ticket','TicketController@print')->name('ticket');
Route::get('/send-test-email','EmailController@test_email')->name('sendEmail');

Route::get('/import-excel-data','ImportExcelController@excel_import')->name('excelImport');
Route::post('/import-excel-data','ImportExcelController@import_excel_data')->name('importData');
Route::get('/export-excel-data','ImportExcelController@export_excel_data')->name('exportData');

//Route::get('export', 'ImportExcelController@export')->name('export');

//Route::get('importExportView', 'ImportExcelController@importExportView');
//
//Route::post('import', 'ImportExcelController@import')->name('import');
