<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function exportPDF($id)
    {
        $siswa = Siswa::find($id);
        $pdf = Pdf::loadview('siswa.pdfDetail', compact('siswa'));
        return $pdf->stream('data-siswa.pdf');
    }
}
