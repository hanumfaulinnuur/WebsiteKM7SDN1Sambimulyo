<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class CariController extends Controller
{
    public function cari(Request $request)
    {
        $query = $request->input('query');
        $siswa = Siswa::where('nama_lengkap', 'LIKE', "%{$query}%")
                            ->get();
        return view('siswa.listSiswa', compact('siswa'));
    }

}
