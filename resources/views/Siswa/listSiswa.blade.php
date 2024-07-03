@extends('layout.master')
@section('title', 'list-siswa')
@section('content')

<main id="main" class="main">
    <div class="card">
        <div class="card-body">
          @if (Session::has('success'))
         <div class="alert alert-info mt-3">{{ Session('success') }}</div>
       @endif
          <h5 class="card-title">List Siswa SDN 1 Sambimulyo</h5><hr>

          <form class="d-inline-flex mt-2 mb-4" action="{{ url('/cari/siswa') }}" method="GET" >
            <input class="form-control me-2" type="text" name="query" placeholder="Cari Nama Siswa" aria-label="Search">
            <button class="btn btn-info" type="submit"><i class="bi bi-search"></i></button>
          </form>

          <table class="table table-striped table-bordered">
            <thead>
              <tr class="text-center">
                <th scope="col">No.</th>
                <th scope="col">Nisn</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Lihat Detail</th>
              </tr>
            </thead>
            @if($siswa->isEmpty())
          <p class="text-danger">Data Yang Anda Cari Tidak Ditemukan ! <a href="{{ url('siswa') }}" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><b>Klik Untuk Kembali</b></a></p>
           @else
            @foreach ($siswa as $key=> $s)
            <tbody>
              <tr>
                <th scope="row" class="text-center">{{ $key+1 }}</th>
                <td>{{ $s->nisn }}</td>
                <td>{{ $s->nama_lengkap }}</td>
                <td>{{ $s->jenis_kelamin }}</td>
                <td>{{ $s->tempat_lahir }}</td>
                <td class="text-center">
                  <a class="btn btn-success" href="{{ route('siswa.show', $s->id) }}"><i class="bi bi-eye-fill"></i></a>
                  <a class="btn btn-primary" href="{{ route('siswa.edit', $s->id) }}"><i class="bi bi-pencil-square"></i></a>
                  <form action="{{ route('siswa.destroy', $s->id) }}" method="POST" class="d-inline">
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