@extends('layout.master')
@section('title', 'Edit-guru')
@section('content')

<main id="main" class="main">
  <div class="card">
      <div class="card-body">
        <h5 class="card-title">Edit Data Tenaga Pendidik</h5><hr><br>
        <form method="POST" enctype="multipart/form-data" action="{{ route('guru.update', $guru->id ) }}">
            @csrf
            @method('PUT')
          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">NIP</label>
            <div class="col-sm-10">
              <input type="number" value="{{ $guru->NIP }}" name="NIP" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
              <input type="name" value="{{ $guru->nama_lengkap }}" name="nama_lengkap" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
              <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                <option value="Laki-Laki" {{ $guru->jenis_kelamin == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki</option>
                <option value="Perempuan" {{ $guru->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Tempat Lahir</label>
            <div class="col-sm-10">
              <input type="text" value="{{ $guru->tempat_lahir }}" name="tempat_lahir" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Tanggal Lahir</label>
            <div class="col-sm-10">
              <input type="date" value="{{ $guru->tgl_lahir }}" name="tgl_lahir" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputPassword" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
              <textarea class="form-control" name="alamat" style="height: 100px">{{ $guru->alamat }}</textarea>
            </div>
          </div>
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Jabatan</label>
            <div class="col-sm-10">
              <select class="form-select" name="jabatan" aria-label="Default select example">
                <option selected>Pilih Jabatan</option>
                <option value="Kepala Sekolah" {{ $guru->jabatan == 'Kepala Sekolah' ? 'selected' : '' }}>Kepala Sekolah</option>
                <option value="Guru" {{ $guru->jabatan == 'Guru' ? 'selected' : '' }}>Guru</option>
                <option value="Staff Kariawan" {{ $guru->jabatan == 'Staff Kariawan' ? 'selected' : '' }}>Staff Kariawan</option>
              </select>
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputText" class="col-sm-2 col-form-label">Bidang Keahlian</label>
            <div class="col-sm-10">
              <input type="text" value="{{ $guru->bidang_keahlian }}" name="bidang_keahlian" class="form-control">
            </div>
          </div>
          <div class="row mb-3">
            <label for="inputNumber" class="col-sm-2 col-form-label">Pas Foto</label>
            <div class="col-sm-10">
              <input class="form-control" name="foto" type="file"  accept="foto/">
            </div>
          </div>
          
          <br>
          <div class="row mb-3">
            <div class="col-sm-9">
              <a class="btn btn-danger" href="{{ route('guru.index') }}" role="button"><i class="bi bi-box-arrow-in-left"></i> Kembali</a>
              <button type="submit" class="btn btn-primary"><i class="bi bi-check2-circle"></i> Rubah</button>
            </div>
          </div>

        </form>
      </div>
      </div>
</main>

@endsection