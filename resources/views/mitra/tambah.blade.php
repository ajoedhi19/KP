@extends('mitra/master')

@section('content')
<div class="container-fluid">
<form action="{{ url('mitra/tambah') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="Nama">nama</label>
      <input type="Text" class="form-control" id="Nama" aria-describedby="emailHelp" placeholder="Nama" name="Nama" autofocus >
    </div>
    <div class="form-group">
        <label for="Tanggal_Lahir">Tanggal Lahir</label>
        <input type="date" class="form-control" id="Tanggal_Lahir" aria-describedby="emailHelp" placeholder="Tanggal Lahir" name="Tanggal_Lahir" autofocus >
    </div>
    <div class="form-group">
        <label for="Tempat_Lahir">Tempat Lahir</label>
        <input type="text" class="form-control" id="Tempat_Lahir" aria-describedby="emailHelp" placeholder="Tempat Lahir" name="Tempat_Lahir" autofocus >
    </div>
    <div class="form-group">
      <label for="Jenis_Kelamin">Jenis Kelamin</label>
      <select class="form-select" aria-label="Default select example" name="Jenis_Kelamin" id="Jenis_Kelamin" required placeholder="Jenis Kelamin">
      <option value="Laki-Laki">Laki-Laki</option>
      <option value="Perempuan">Perempuan</option>
      </select>
    </div>
    <div class="form-group">
        <label for="Alamat">Alamat</label>
        <textarea class="form-control" name="Alamat" id="Alamat" cols="3" rows="3" ></textarea>
      </div>
    <div class="form-group">
      <label for="No_KTP">Nomor KTP</label>
      <input type="Text" class="form-control" id="No_KTP" aria-describedby="emailHelp" placeholder="Nomor KTP" name="No_KTP">
    </div>
    <div class="form-group">
        <label for="Foto_KTP">Foto KTP</label>
        <input type="file" class="form-control" id="Foto_KTP" aria-describedby="emailHelp" placeholder="Foto KTP" name="Foto_KTP" >
    </div>
    <div class="form-group">
        <label for="No_KK">Nomor KK</label>
        <input type="Text" class="form-control" id="No_KK" aria-describedby="emailHelp" placeholder="Nomor KK" name="No_KK">
    </div>
    <div class="form-group">
        <label for="No_Kartu_BPJS">Nomor Kartu BPJS</label>
        <input type="Text" class="form-control" id="No_Kartu_BPJS" aria-describedby="emailHelp" placeholder="Nomor Kartu BPJS" name="No_Kartu_BPJS">
    </div>
    <div class="form-group">
        <label for="No_NPWP">Nomor NPWP</label>
        <input type="Text" class="form-control" id="No_NPWP" aria-describedby="emailHelp" placeholder="Nomor NPWP" name="No_NPWP">
    </div>
    <div class="form-group">
        <label for="No_HP">Nomor HP</label>
        <input type="Text" class="form-control" id="No_HP" aria-describedby="emailHelp" placeholder="Nomor HP" name="No_HP">
    </div>
    <div class="form-group">
        <label for="No_Telpon_Keluarga">Nomor Telpon Keluarga</label>
        <input type="Text" class="form-control" id="No_Telpon_Keluarga" aria-describedby="emailHelp" placeholder="Nomor Telpon Keluarga" name="No_Telpon_Keluarga">
    </div>
    <div class="form-group">
        <label for="Nama_Keluarga">Nama Keluarga</label>
        <input type="Text" class="form-control" id="Nama_Keluarga" aria-describedby="emailHelp" placeholder="Nama Keluarga" name="Nama_Keluarga">
    </div>
    <div class="form-group">
        <label for="Email">Email</label>
        <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Email" name="Email">
    </div>
    <div class="form-group">
        <label for="witel">Witel</label>
        <select class="form-select" aria-label="Default select example" name="witel" id="witel" required="required">
            <option value="Denpasar">Witel Denpasar</option>
            <option value="Gresik">Witel Gresik</option>
            <option value="Jember">Witel Jember</option>
            <option value="Kediri">Witel Kediri</option>
            <option value="Kupang">Witel Kupang</option>
            <option value="Madiun">Witel Madiun</option>
            <option value="Malang">Witel Malang</option>
            <option value="Mataram">Witel Mataram</option>
            <option value="Pasuruan">Witel Pasuruan</option>
            <option value="Sidoarjo">Witel Sidoarjo</option>
            <option value="Singaraja">Witel Singaraja</option>
            <option value="SurabayaSealatan">Witel Surabaya Selatan</option>
            <option value="SurabayaUtara">Witel Surabaya Utara</option>
        </select>
    </div>
    <div class="form-group">
        <label for="status_naker">Status Naker</label>
        <select class="form-select" aria-label="Default select example" name="status_naker" id="status_naker" required="required">
            <option value=1 >Active</option>
            <option value=0 >Non Active</option>
        </select>
    </div>
    <div class="form-group">
        <label for="direktorat">Direktorat</label>
            <select class="form-select" aria-label="Default select example" name="direktorat" id="direktorat" required="required">
                <option value="Construction">Construction</option>
                <option value="Corporate Office Group">Corporate Office Group</option>
                <option value="Finance">Finance</option>
                <option value="Human Capital Management & Strategy">Human Capital Management & Strategy</option>
                <option value="Operation">Operation</option>
                <option value="Supply & Commerce">Supply & Commerce</option>
            </select>
    </div>
    <div class="form-group">
        <label for="Level_Pendidikan">Level Pendidikan</label>
            <select class="form-select" aria-label="Default select example" name="Level_Pendidikan" id="Level_Pendidikan" required="required">
            <option value="SMA">SMA</option>
                    <option value="STM">STM</option>
                    <option value="D1">D1</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="SMK">SMK</option>
                    <option value="MAN">MAN</option>
                    <option value="SMP">SMP</option>
                    <option value="SD">SD</option>
                    <option value="SMEA">SMEA</option>
                    <option value="D4">D4</option>
        </select>
    </div>
    <div class="form-group">
        <label for="Posisi">Posisi</label>
        <select class="form-select" aria-label="Default select example" name="Posisi" id="Posisi" required="required">\
            <option value="Provisioning">Teknisi Provisioning</option>
            <option value="Migrasi">Teknisi Migrasi</option>
            <option value="Wilsus">Teknisi Wilsus</option>
            <option value="IOAN">Teknisi IOAN</option>
            <option value="BGES Serices">Teknisi BGES Serices</option>
        </select>
    </div>
    <div class="form-group">
        <label for="Tanggal_Pengajuan">Tanggal Pengajuan</label>
        <input type="date" class="form-control" id="Tanggal_Pengajuan" aria-describedby="emailHelp" placeholder="Tanggal Pengajuan" name="Tanggal_Pengajuan" autofocus >
    </div>
    <div class="form-group">
        <label for="NIK_Waspag_TA">NIK Waspag TA</label>
        <input type="text" class="form-control" id="NIK_Waspag_TA" aria-describedby="emailHelp" placeholder="NIK Waspag TA" name="NIK_Waspag_TA" autofocus >
    </div>
    <div class="form-group">
        <label for="Regional">Regional</label>
        <select class="form-select" aria-label="Default select example" name="Regional" id="Regional" required="required">
            <option value="Jatim Bali Nusra">Jatim Bali Nusra</option>
        </select>
    </div>
    <div class="form-group">
        <label for="Status_Kepegawaian">Status Kepegawaian</label>
        <select class="form-select" aria-label="Default select example" name="Status_Kepegawaian" id="Status_Kepegawaian" required="required">
            <option value="Kontrak">Kontrak</option>
            <option value="Tetap">Tetap</option>
        </select>
    </div>
    <div class="form-group">
        <label for="Tanggal_Mulai_Kontrak">Tanggal Mulai Kontrak</label>
        <input type="date" class="form-control" id="Tanggal_Mulai_Kontrak" aria-describedby="emailHelp" placeholder="Tanggal Mulai Kontrak" name="Tanggal_Mulai_Kontrak" autofocus >
    </div>
    <div class="form-group">
      <label for="Tanggal_Akhir_Kontrak">Tanggal Berakhir Kontrak</label>
      <input type="date" class="form-control" id="Tanggal_Akhir_Kontrak" aria-describedby="emailHelp" placeholder="Tanggal Berakhir Kontrak" name="Tanggal_Akhir_Kontrak" >
    </div>
    <div class="form-group">
      <label for="Kontrak_Kerja">Kontrak Kerja</label>
      <input type="file" class="form-control" id="Kontrak_Kerja" aria-describedby="emailHelp" placeholder="Kontrak Kerja" name="Kontrak_Kerja" >
    </div>
    <button type="submit" class="btn btn-primary">Tambah</button>
  </form>
</div>
@endsection