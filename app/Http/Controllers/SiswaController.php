<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa.listSiswa', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('siswa.tambahSiswa');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['foto'] = $request->file('foto')->store('foto-siswa');

        Siswa::create($data);
        return redirect()->route('siswa.index')->with(['success' => 'data berhasil ditambahkan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $siswa = Siswa::find($id);

        return view('siswa.detailSiswa', compact('siswa')) ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $siswa = Siswa::find($id);

        return view('siswa.editSiswa', compact('siswa')) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (empty($request->file('foto'))) {
            $siswa = Siswa::find($id);
            $siswa->update([
                'nisn' => $request->nisn,
                'nama_lengkap' => $request->nama_lengkap,
                'jenis_kelamin'=> $request->jenis_kelamin,
                'tempat_lahir' => $request->tempat_lahir,
                'tgl_lahir'    => $request->tgl_lahir,
                'alamat'       => $request->alamat,
                'tahun_masuk'  => $request->tahun_masuk,
                'status'       => $request->status,
            ]);

            return redirect()->route('siswa.index')->with(['success' => 'data berhasil dirubah']);
            
        }else{
            $siswa = Siswa::find($id);
            Storage::delete($siswa->foto);
            $siswa->update([
                'nisn' => $request->nisn,
                'nama_lengkap' => $request->nama_lengkap,
                'jenis_kelamin'=> $request->jenis_kelamin,
                'tempat_lahir' => $request->tempat_lahir,
                'tgl_lahir'    => $request->tgl_lahir,
                'alamat'       => $request->alamat,
                'tahun_masuk'  => $request->tahun_masuk,
                'status'       => $request->status,
                'foto'         => $request->file('foto')->store('foto-siswa'),
            ]);

            return redirect()->route('siswa.index')->with(['success' => 'data berhasil dirubah']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $siswa = Siswa::find($id);
        Storage::delete($siswa->foto);
        $siswa->delete();
        return redirect()->route('siswa.index')->with(['success' => 'data berhasil dihapus']);
    }
}
