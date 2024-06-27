@extends('layout.master')
@section('title', 'detail-Siswa')
@section('content')

<main id="main" class="main">
  <section class="section profile">
    <div class="row">

      <div class="col-xl-4">
        <div class="card">
          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
            <img src="{{ asset('pas-foto/'.$siswa->foto) }}" class="img-thumbnail" alt="foto-siswa">
          </div>
        </div>
      </div>

      <div class="col-xl-8">
        <div class="card">
          <div class="card-body pt-3">
            <div class="tab-content pt-2">
              <div class="tab-pane fade show active profile-overview" id="profile-overview">
                <h5 class="card-title">Detail Data Siswa</h5><hr>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">NISN</div>
                  <div class="col-lg-9 col-md-8">{{ $siswa->nisn }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Nama Lengkap</div>
                  <div class="col-lg-9 col-md-8">{{ $siswa->nama_lengkap }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                  <div class="col-lg-9 col-md-8">{{ $siswa->jenis_kelamin }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Tempat Lahir</div>
                  <div class="col-lg-9 col-md-8">{{ $siswa->tempat_lahir }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Tanggal Lahir</div>
                  <div class="col-lg-9 col-md-8">{{ $siswa->tgl_lahir }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Alamat</div>
                  <div class="col-lg-9 col-md-8">{{ $siswa->alamat }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Tahun Masuk</div>
                  <div class="col-lg-9 col-md-8">{{ $siswa->tahun_masuk }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Status</div>
                  <div class="col-lg-9 col-md-8 text-success">{{ $siswa->status }}</div>
                </div>

                <div class="row">
                  <div class=" label">
                    <a class="btn btn-primary" href="{{ url('siswa') }}" role="button"><i class="bi bi-box-arrow-in-left"></i> Kembali</a>
                    <a class="btn btn-danger" href="#" role="button"><i class="bi bi-printer"></i> Cetak</a>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

@endsection