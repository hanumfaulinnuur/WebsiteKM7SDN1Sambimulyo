<?php

namespace App\Exports;

use App\Models\Guru;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class GuruExport implements FromQuery, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return Guru::query();
    }

    public function map($guru): array
    {
        return [
            $guru->NIP,
            $guru->nama_lengkap,
            $guru->jenis_kelamin,
            $guru->tempat_lahir,
            $guru->tgl_lahir,
            $guru->alamat,
            $guru->jabatan,
            $guru->bidang_keahlian,
            // Tambahkan kolom lain sesuai kebutuhan
        ];
    }

    public function headings(): array
    {
        return [
            'NIP',
            'Nama Lengkap',
            'Jenis Kelamin',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Alamat',
            'Jabatan',
            'Bidang Keahlian',
        ];
    }
}
