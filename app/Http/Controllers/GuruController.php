<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $guru = Guru::all();
        return view('guru.listGuru', compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guru.tambahGuru');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['foto'] = $request->file('foto')->store('foto-guru');

        Guru::create($data);
        return redirect()->route('guru.index')->with(['success' => 'data guru berhasil ditambahkan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $guru = Guru::find($id);
        return view('guru.detailGuru', compact('guru')) ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $guru = Guru::find($id);
        return view('guru.editGuru', compact('guru')) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (empty($request->file('foto'))) {
            $guru = Guru::find($id);
            $guru->update([
                'NIP'            => $request->NIP,
                'nama_lengkap'   => $request->nama_lengkap,
                'jenis_kelamin'  => $request->jenis_kelamin,
                'tempat_lahir'   => $request->tempat_lahir,
                'tgl_lahir'      => $request->tgl_lahir,
                'alamat'         => $request->alamat,
                'jabatan'        => $request->jabatan,
                'bidang_keahlian'=> $request->bidang_keahlian,
            ]);

            return redirect()->route('guru.index')->with(['success' => 'data berhasil dirubah']);
            
        }else{
            $guru = Guru::find($id);
            Storage::delete($guru->foto);
            $guru->update([
                'NIP'            => $request->NIP,
                'nama_lengkap'   => $request->nama_lengkap,
                'jenis_kelamin'  => $request->jenis_kelamin,
                'tempat_lahir'   => $request->tempat_lahir,
                'tgl_lahir'      => $request->tgl_lahir,
                'alamat'         => $request->alamat,
                'jabatan'        => $request->jabatan,
                'bidang_keahlian'=> $request->bidang_keahlian,
                'foto'           => $request->file('foto')->store('foto-guru'),
            ]);

            return redirect()->route('guru.index')->with(['success' => 'data berhasil dirubah']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $guru = Guru::find($id);
        Storage::delete($guru->foto);
        $guru->delete();
        return redirect()->route('guru.index')->with(['success' => 'data berhasil dihapus']);
    }
}
