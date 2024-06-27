@extends('layout.master')
@section('title', 'list-siswa')
@section('content')

<main id="main" class="main">
    <div class="card">
        <div class="card-body">
          @if (Session::has('success'))
         <div class="alert alert-info mt-3">{{ Session('success') }}</div>
       @endif
          <h5 class="card-title">List Siswa SDN 1 Sambimulyo</h5><hr><br>
          <table class="table table-striped table-bordered">
            <thead>
              <tr class="text-center">
                <th scope="col">No.</th>
                <th scope="col">Nisn</th>
                <th scope="col">Foto</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Lihat Detail</th>
              </tr>
            </thead>
            @foreach ($siswa as $key=> $s)
            <tbody>
              <tr>
                <th scope="row" class="text-center">{{ $key+1 }}</th>
                <td>{{ $s->nisn }}</td>
                <td><img src="{{ asset('pas-foto/'.$s->foto) }}" width="60px"></td>
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
            </tbody>
          </table>
        </div>
    </div>
</main>
@endsection