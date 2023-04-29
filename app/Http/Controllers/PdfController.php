<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;

class PdfController extends Controller
{
    public function index()
    {
        // Your code here
    }

    public function show($id)
    {
        // Your code here
    }
    public function generatePdf(Request $request)
{
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

 // Return the generated PDF to the client
 return $pdf->stream();
}
}
