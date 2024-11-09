<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function viewPDF()
    {
        $data = ['title' => 'Welcome to Laravel PDF generation'];
        $pdf = PDF::loadView('pdf_view', $data);

        return $pdf->stream('document.pdf');
    }
}

