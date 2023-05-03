<?php

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


// Route::post('/api/generate-pdf', function(Request $request) {
//     // Retrieve the data from the request
//     $data = $request->input('data');
  
//     // Generate the PDF document using a library like Dompdf
//     $pdf = App::make('dompdf.wrapper');
//     $pdf->loadHTML('<h1>' . $data . '</h1>');
  
//     // Return the PDF document as a response
//     return $pdf->stream();
//   });


Route::get('/', function () {
    return view('index');
});