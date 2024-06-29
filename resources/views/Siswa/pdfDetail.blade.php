<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/surat.css">
  <link href="assets/img/TWH.png" rel="icon">
  <title>Cetak Detail Data</title>
</head>
<body>
  <div>
    <header>
      <table>
        <tr>
            <td></td>
            <td></td>
            <td><img src="assets/img/TWH.png" height="120"></td>
            <td>
                <center>
                    <font size="4">KEMENTERIAN PENDIDIKAN, KEBUDAYAAN,</font><br>
                    <font size="4">RISET DAN TEKNOLOGI</font><br>
                    <font size="5"><b>SEKOLAH DASAR NEGERI 1 SAMBIMULYO</b></font><br>
                    <font size="2">Gn. Sari, Bangorejo, Kec. Bangorejo, Kabupaten Banyuwangi, Jawa Timur 68487</font><br>
                    <font size="2">Email : sdn01sambimulyo@gmail.com : Website : - </font><br>
                </center>
            </td>
            <td></td>
            <td></td>
        </tr>
    </table>

    </header>
  
    
      <hr class="garis1"/>
      <center><br>
        <font size="5"><u><b>SURAT KETERANGAN</b></u></font><br>
        <font size="3"><b>Nomor :...../225/SDN1.Sam/2024</b></font>
        <br>
      </center>
      <div class="container">
      <div id="pembuka" class="row">&emsp; &emsp; &emsp;  
        Yang bertanda tangan di bawah ini Kepala SD Negeri 1 Sambimulyo Kecamatan Bangorejo, 
        Kabupaten Banyuwangi, Provinsi Jawa Timur, menyatakan bahwa yang bernama :
      </div>
      <div id="tempat-tgl">
        <table>
          <tr>
            <td>Nama</td>
            <td>:</td>
            <td class="kapital"><b>{{ $siswa->nama_lengkap }}</b></td>
          </tr>
          <tr>
            <td>NISN</td>
            <td>:</td>
            <td>{{ $siswa->nisn }}</td>
          </tr>
          <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>{{ $siswa->jenis_kelamin }}</td>
          </tr>
          <tr>
            <td>Tempat, Tanggal Lahir</td>
            <td>:</td>
            <td>{{ $siswa->tempat_lahir }}, {{ $siswa->tgl_lahir }}</td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>{{ $siswa->alamat }}</td>
          </tr>
          <tr>
            <td>Tahun Masuk</td>
            <td>:</td>
            <td>{{ $siswa->tahun_masuk }}</td>
          </tr>
        </table>
      </div>
      <div id="inti" class="row">&emsp; &emsp; &emsp;  
        Adalah benar-benar siswa SD Negeri 1 Sambimulyo Kecamatan Bangorejo, 
        Kabupaten Banyuwangi, Provinsi Jawa Timur, dan berstatus <b class="kapital">{{ $siswa->status }}</b> dalam data akademik.
      </div>
      <br>
      <div id="penutup">Demikian Surat Keterangan ini dibuat dengan sebenarnya, untuk dipergunakan sebagaimana mestinya.</div>
      <div id="ttd" class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <p id="kepsek"><strong>Kepala SDN 1 Sambimulyo</strong></p>
          <div id="nama-kepsek"><strong><u>Supoyo, S.Pd</u></strong><br />
        NIP. 196504151991111002</div>
      </div>
        </div>
  </div>
  </div>
</body>
</html>