<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::get('pdf', 'App\Http\Controllers\PdfCotroller@generatePdf');
// Route::post('/api/generate-pdf', function(Request $request) {
Route::post('/api/generate-pdf', function(Request $request) {
    // Retrieve the data from the request
    $data = $request->input('data');
  
    // Generate the PDF document using a library like Dompdf
    $pdf = App::make('dompdf.wrapper');
    $pdf->loadHTML('<h1>' . $data . '</h1>');
  
    // Return the PDF document as a response
    return $pdf->stream();
  });
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
