<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Http\Request;

class PdfController extends Controller
{
    //
    function create()  {

        $o_text = "سهيل عثمان حامد المجذوب";

        $ar   = new \App\Services\ArabicPdf\Arabic();

        $text = $ar->utf8Glyphs($o_text);


        $pdf = Pdf::loadView('pdf',['text'=>$text]);

        return $pdf->download('invoice.pdf');
    }
}
