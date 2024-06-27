@extends('layout.master')
@section('title', 'detail-Guru')
@section('content')

<main id="main" class="main">
  <section class="section profile">
    <div class="row">
        <div class="col-xl-8">
            <div class="card">
              <div class="card-body pt-3">
                <div class="tab-content pt-2">
                  <div class="tab-pane fade show active profile-overview" id="profile-overview">
                    <h5 class="card-title">Detail Data Diri Guru</h5><hr>
    
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label ">NIP</div>
                      <div class="col-lg-9 col-md-8">: {{ $guru->NIP }}</div>
                    </div>
    
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Nama Lengkap</div>
                      <div class="col-lg-9 col-md-8">: {{ $guru->nama_lengkap }}</div>
                    </div>
    
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                      <div class="col-lg-9 col-md-8">: {{ $guru->jenis_kelamin }}</div>
                    </div>
    
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Tempat Lahir</div>
                      <div class="col-lg-9 col-md-8">: {{ $guru->tempat_lahir }}</div>
                    </div>
    
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Tanggal Lahir</div>
                      <div class="col-lg-9 col-md-8">: {{ $guru->tgl_lahir }}</div>
                    </div>
    
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Alamat</div>
                      <div class="col-lg-9 col-md-8">: {{ $guru->alamat }}</div>
                    </div>
    
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Jabatan</div>
                      <div class="col-lg-9 col-md-8">: {{ $guru->jabatan }}</div>
                    </div>
    
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Bidang Keahlian</div>
                      <div class="col-lg-9 col-md-8">: {{ $guru->bidang_keahlian }}</div>
                    </div>
    
                    <div class="row mt-4">
                      <div class=" label">
                        <a class="btn btn-danger" href="{{ route('guru.index') }}" role="button"><i class="bi bi-box-arrow-in-left"></i> Kembali</a>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
      <div class="col-xl-4">
        <div class="card">
          <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
            <img src="{{ asset('pas-foto/'.$guru->foto) }}" class="img-thumbnail" alt="foto-guru">
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

@endsection