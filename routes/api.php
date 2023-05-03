<?php


use Illuminate\Http\Request;
// use Barryvdh\DomPDF\Facade as PDF;
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

  function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}
// Route::post('http://localhost:8000/', function(Request $request) {
//     // Get the data from the Axios POST request
//      $data = $request->input('data');
//     console_log($data);
//     // Generate a PDF document using the data
//     // $pdf = PDF::loadView('pdf.template', ['data' => $data]);

//     // Return the PDF document as a response
//     // return $pdf->download('document.pdf');
// });


// use Barryvdh\DomPDF\Facade as PDF;

Route::post('/generate-pdf', function(Request $request) {

    $data = $request->input('data');
console_log($data);

    // $pdf = PDF\Pdf::loadView('pdf.template', ['data' => $data]);

    // return $pdf->download('document.pdf');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
