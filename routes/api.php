<?php


use Illuminate\Http\Request;
// use Barryvdh\DomPDF\Facade as PDF;
use Dompdf\Dompdf;
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

Route::post('/generate-pdf', function(Request $request) {

//     $data = $request->input('data');
dd( $request);
// $pdf = new Dompdf();
    // $pdf = PDF\Pdf::loadView('pdf.template', ['data' => $data]);

    // return $pdf->download('document.pdf');

         // Get the data from the request
         $data = $request->input('data');
         
         
         // Create a new instance of Dompdf
         $pdf = new Dompdf();
        
         // Render the view into a PDF
         $pdf->loadHtml(View::make('pdf.document', ['data' => $data])->render());
        
         // Set the paper size and orientation
         $pdf->setPaper('A4', 'portrait');
        
         // Render the PDF
         $pdf->render();
         $pdf->stream('test.pdf');
         // Return the generated PDF to the client
         return $pdf ;
    
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
