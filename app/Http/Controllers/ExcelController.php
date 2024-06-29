<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Exports\GuruExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function exportExcel(){
        return Excel::download(new GuruExport, 'ekspor-data-guru.xlsx');
    }
}
