@extends('layout.master')
@section('title', 'list-guru')
@section('content')

<main id="main" class="main">
    <div class="card">
        <div class="card-body">
          @if (Session::has('success'))
         <div class="alert alert-info mt-3">{{ Session('success') }}</div>
       @endif
          <h5 class="card-title">List Dewan Guru SDN 1 Sambimulyo</h5><hr>
          <a class="btn btn-success mb-3" href="{{ url('/export-excel') }}" role="button"><i class="bi bi-file-earmark-spreadsheet-fill"></i> Ekspor Excel</a><br>
          <form class="d-inline-flex mt-2 mb-4" action="{{ url('/cari/guru') }}" method="GET" >
            <input class="form-control me-2" type="text" name="query" placeholder="Cari Nama Guru" aria-label="Search">
            <button class="btn btn-info" type="submit"><i class="bi bi-search"></i></button>
          </form>
          <table class="table table-striped table-bordered">
            <thead>
              <tr class="text-center">
                <th scope="col">No.</th>
                <th scope="col">NIP</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Pangkat</th>
                <th scope="col">Lihat Detail</th>
              </tr>
            </thead>
            @if($guru->isEmpty())
          <p class="text-danger">Data Yang Anda Cari Tidak Ditemukan ! <a href="{{ url('guru') }}" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><b>Klik Untuk Kembali</b></a></p>
           @else
            @foreach ($guru as $key=> $g)
            <tbody>
              <tr>
                <th scope="row" class="text-center">{{ $key+1 }}</th>
                <td>{{ $g->NIP }}</td>
                <td>{{ $g->nama_lengkap }}</td>
                <td>{{ $g->jenis_kelamin }}</td>
                <td>{{ $g->tempat_lahir }}</td>
                <td>{{ $g->tgl_lahir }}</td>
                <td>{{ $g->jabatan }}</td>
                <td class="text-center">
                  <a class="btn btn-success" href="{{ route('guru.show', $g->id) }}"><i class="bi bi-eye-fill"></i></a>
                  <a class="btn btn-primary" href="{{ route('guru.edit', $g->id) }}"><i class="bi bi-pencil-square"></i></a>
                  <form action="{{ route('guru.destroy', $g->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class=" btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                  </form>
                </td>
              </tr>
            @endforeach
            @endif
            </tbody>
          </table>
        </div>
    </div>
</main>

@endsection