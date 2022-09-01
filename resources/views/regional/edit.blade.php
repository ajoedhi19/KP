@extends('regional/master')

@section('content')
<div class="container-fluid">
<form action="{{ url('regional/edit', $data->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="Nama">nama</label>
      <input type="Text" class="form-control" id="Nama" aria-describedby="emailHelp" placeholder="Nama" name="Nama" autofocus value={{ old('Nama' ,$data->Nama) }} >
    </div>
    <div class="form-group">
        <label for="Tanggal_Lahir">Tanggal Lahir</label>
        <input type="date" class="form-control" id="Tanggal_Lahir" aria-describedby="emailHelp" placeholder="Tanggal Lahir" name="Tanggal_Lahir" autofocus value={{ old('Tanggal_Lahir' ,$data->Tanggal_Lahir) }}>
    </div>
    <div class="form-group">
        <label for="Tempat_Lahir">Tempat Lahir</label>
        <input type="text" class="form-control" id="Tempat_Lahir" aria-describedby="emailHelp" placeholder="Tempat Lahir" name="Tempat_Lahir" autofocus value={{ old('Tempat_Lahir' ,$data->Tempat_Lahir) }}>
    </div>
    <div class="form-group">
      <label for="Jenis_Kelamin">Jenis Kelamin</label>
      <select class="form-select" aria-label="Default select example" name="Jenis_Kelamin" id="Jenis_Kelamin" required placeholder="Jenis Kelamin" value={{ old('Jenis_Kelamin' ,$data->Jenis_Kelamin) }}>
      <option value={{ old('Jenis_Kelamin' ,$data->Jenis_Kelamin) }}>Laki-Laki</option>
      <option value={{ old('Jenis_Kelamin' ,$data->Jenis_Kelamin) }}>Perempuan</option>
      </select>
    </div>
    <div class="form-group">
        <label for="Alamat">Alamat</label>
        <textarea class="form-control" name="Alamat" id="Alamat" cols="3" rows="3" value={{ old('Alamat' ,$data->Alamat) }}>{{ $data->Alamat}}</textarea>
      </div>
    <div class="form-group">
      <label for="No_KTP">Nomor KTP</label>
      <input type="Text" class="form-control" id="No_KTP" aria-describedby="emailHelp" placeholder="Nomor KTP" name="No_KTP" value={{ old('No_KTP' ,$data->No_KTP) }}>
    </div>
    <div class="form-group">
        <label for="Foto_KTP">Foto KTP</label>
        <input type="file" class="form-control" id="Foto_KTP" aria-describedby="emailHelp" placeholder="Foto KTP" name="Foto_KTP" value={{ old('Foto_KTP' ,$data->Foto_KTP) }}>
    </div>
    <div class="form-group">
        <label for="No_KK">Nomor KK</label>
        <input type="Text" class="form-control" id="No_KK" aria-describedby="emailHelp" placeholder="Nomor KK" name="No_KK" value={{ old('No_KK' ,$data->No_KK) }}>
    </div>
    <div class="form-group">
        <label for="No_Kartu_BPJS">Nomor Kartu BPJS</label>
        <input type="Text" class="form-control" id="No_Kartu_BPJS" aria-describedby="emailHelp" placeholder="Nomor Kartu BPJS" name="No_Kartu_BPJS" value={{ old('No_Kartu_BPJS' ,$data->No_Kartu_BPJS) }}>
    </div>
    <div class="form-group">
        <label for="No_NPWP">Nomor NPWP</label>
        <input type="Text" class="form-control" id="No_NPWP" aria-describedby="emailHelp" placeholder="Nomor NPWP" name="No_NPWP" value={{ old('No_NPWP' ,$data->No_NPWP) }}>
    </div>
    <div class="form-group">
        <label for="No_HP">Nomor HP</label>
        <input type="Text" class="form-control" id="No_HP" aria-describedby="emailHelp" placeholder="Nomor HP" name="No_HP" value={{ old('No_HP' ,$data->No_HP) }}>
    </div>
    <div class="form-group">
        <label for="No_Telpon_Keluarga">Nomor Telpon Keluarga</label>
        <input type="Text" class="form-control" id="No_Telpon_Keluarga" aria-describedby="emailHelp" placeholder="Nomor Telpon Keluarga" name="No_Telpon_Keluarga" value={{ old('No_Telpon_Keluarga' ,$data->No_Telpon_Keluarga) }}>
    </div>
    <div class="form-group">
        <label for="Nama_Keluarga">Nama Keluarga</label>
        <input type="Text" class="form-control" id="Nama_Keluarga" aria-describedby="emailHelp" placeholder="Nama Keluarga" name="Nama_Keluarga" value={{ old('Nama_Keluarga' ,$data->Nama_Keluarga) }}>
    </div>
    <div class="form-group">
        <label for="Email">Email</label>
        <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Email" name="Email" value={{ old('Email' ,$data->Email) }}>
    </div>
    <div class="form-group">
        <label for="witel">Witel</label>
        <select class="form-select" aria-label="Default select example" name="witel" id="witel" required="required">
            {{-- @foreach ($data as $item)
                @if (old('witel', $item->witel) == $item->witel)
                    <option value="{{ $item->witel }}"  {{ old('witel') == $item->witel ? ' selected' : ' ' }}>{{ $item->witel }}</option>
                @endif
                
            @endforeach --}}
            @if(old('witel', $data->witel) == $data->witel)
            <option value={{ old('witel' ,$data->witel) }} selected>{{ old('witel' ,$data->witel) }}</option>

            @else
            <option value="Witel Denpasar" {{ old('witel') == $data->witel ? ' selected' : ' ' }}>Witel Denpasar</option>
            <option value="Witel Gresik" {{ old('witel') == $data->witel ? ' selected' : ' ' }} >Witel Gresik</option>
            <option value="Witel Jember" {{ old('witel') == $data->witel ? ' selected' : ' ' }} >Witel Jember</option>
            <option value="Witel Kediri" {{ old('witel') == $data->witel ? ' selected' : ' ' }} >Witel Kediri</option>
            <option value="Witel Kupang" {{ old('witel') == $data->witel ? ' selected' : ' ' }} >Witel Kupang</option>
            <option value="Witel Madiun" {{ old('witel') == $data->witel ? ' selected' : ' ' }} >Witel Madiun</option>
            <option value="Witel Malang" {{ old('witel') == $data->witel ? ' selected' : ' ' }} >Witel Malang</option>
            <option value="Witel Mataram" {{ old('witel') == $data->witel ? ' selected' : ' ' }} >Witel Mataram</option>
            <option value="Witel Pasuruan" {{ old('witel') == $data->witel ? ' selected' : ' ' }} >Witel Pasuruan</option>
            <option value="Witel Sidoarjo" {{ old('witel') == $data->witel ? ' selected' : ' ' }} >Witel Sidoarjo</option>
            <option value="Witel Singaraja" {{ old('witel') == $data->witel ? ' selected' : ' ' }} >Witel Singaraja</option>
            <option value="Witel Surabaya" {{ old('witel') == $data->witel ? ' selected' : ' ' }} >Witel Surabaya</option>
            @endif
        </select>
    </div>
    <div class="form-group">
        <label for="status_naker">Status Naker</label>
        <select class="form-select" aria-label="Default select example" name="status_naker" id="status_naker" required="required">
            @if(old('status_naker', $data->status_naker) == $data->status_naker)
            <option value={{ old('status_naker' ,$data->status_naker) }} selected>{{ old('status_naker' ,$data->status_naker) }}</option>

            @else
            <option value=1 >Active</option>
            <option value=0 >Non Active</option>
            @endif
        </select>
    </div>
    <div class="form-group">
        <label for="direktorat">Direktorat</label>
            <select class="form-select" aria-label="Default select example" name="direktorat" id="direktorat" required="required">
                @if (old('direktorat', $data->direktorat) == $data->direktorat)
                <option value={{ old('direktorat' ,$data->direktorat) }} selected>{{ old('direktorat' ,$data->direktorat) }}</option>
                    @else
                    <option value="Construction" @if (old('direktorat') == "Construction") selected @endif>Construction</option>
                    <option value="Corporate Office Group" @if (old('direktorat') == "Corporate Office Group") selected @endif>Corporate Office Group</option>
                    <option value="Finance" @if (old('direktorat') == "Finance") selected @endif>Finance</option>
                    <option value="Human Capital Management & Strategy" @if (old('direktorat') == "Human Capital Management & Strategy") selected @endif>Human Capital Management & Strategy</option>
                    <option value="Operation" @if (old('direktorat') == "Operation") selected @endif>Operation</option>
                    <option value="Supply & Commerce" @if (old('direktorat') == "Supply & Commerce") selected @endif>Supply & Commerce</option>
                @endif
            </select>
    </div>
    <div class="form-group">
        <label for="Level_Pendidikan">Level Pendidikan</label>
            <select class="form-select" aria-label="Default select example" name="Level_Pendidikan" id="Level_Pendidikan" required="required">
                @if (old('Level_Pendidikan', $data->Level_Pendidikan) == $data->Level_Pendidikan)
                    <option value={{ old('Level_Pendidikan' ,$data->Level_Pendidikan) }} selected>{{ old('Level_Pendidikan' ,$data->Level_Pendidikan) }}</option>
                @else
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
                @endif            
        </select>
    </div>
    <div class="form-group">
        <label for="Posisi">Posisi</label>
        <select class="form-select" aria-label="Default select example" name="Posisi" id="Posisi" required="required">
            @if (old('posisi', $data->posisi) == $data->posisi)
                    <option value={{ old('posisi' ,$data->posisi) }} selected>{{ old('posisi' ,$data->posisi) }}</option>
                @else
            <option value="Teknisi Provisioning">Teknisi Provisioning</option>
            <option value="Teknisi Migrasi">Teknisi Migrasi</option>
            <option value="Teknisi Wilsus">Teknisi Wilsus</option>
            <option value="Teknisi IOAN">Teknisi IOAN</option>
            <option value="Teknisi BGES Serices">Teknisi BGES Serices</option>
            @endif
        </select>
    </div>
    <div class="form-group">
        <label for="Tanggal_Pengajuan">Tanggal Pengajuan</label>
        <input type="date" class="form-control" id="Tanggal_Pengajuan" aria-describedby="emailHelp" placeholder="Tanggal Pengajuan" name="Tanggal_Pengajuan" value={{ old('Tanggal_Pengajuan' ,$data->Tanggal_Pengajuan) }}>
    </div>
    <div class="form-group">
        <label for="NIK_Waspag_TA">NIK Waspag TA</label>
        <input type="text" class="form-control" id="NIK_Waspag_TA" aria-describedby="emailHelp" placeholder="NIK Waspag TA" name="NIK_Waspag_TA" value={{ old('NIK_Waspag_TA' ,$data->NIK_Waspag_TA) }}>
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
            <option selected>Status Kepegawaian</option>
            <option value="Kontrak">Kontrak</option>
            <option value="Tetap">Tetap</option>
        </select>
    </div>
    <div class="form-group">
        <label for="Tanggal_Mulai_Kontrak">Tanggal Mulai Kontrak</label>
        <input type="date" class="form-control" id="Tanggal_Mulai_Kontrak" aria-describedby="emailHelp" placeholder="Tanggal Mulai Kontrak" name="Tanggal_Mulai_Kontrak" value={{ old('Tanggal_Mulai_Kontrak' ,$data->Tanggal_Mulai_Kontrak) }} >
    </div>
    <div class="form-group">
      <label for="Tanggal_Akhir_Kontrak">Tanggal Berakhir Kontrak</label>
      <input type="date" class="form-control" id="Tanggal_Akhir_Kontrak" aria-describedby="emailHelp" placeholder="Tanggal Berakhir Kontrak" name="Tanggal_Akhir_Kontrak" value={{ old('Tanggal_Akhir_Kontrak' ,$data->Tanggal_Akhir_Kontrak) }}>
    </div>
    <div class="form-group">
      <label for="Kontrak_Kerja">Kontrak Kerja</label>
      <input type="file" class="form-control" id="Kontrak_Kerja" aria-describedby="emailHelp" placeholder="Kontrak Kerja" name="Kontrak_Kerja" value={{ old('Kontrak_Kerja' ,$data->Kontrak_Kerja) }}>
    </div>
    <div class="form-group">
        <label for="NIK">NIK</label>
        <input type="text" class="form-control" id="NIK" aria-describedby="emailHelp" placeholder="NIK" name="NIK" value={{ old('NIK' ,$data->NIK) }}>
      </div>
    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
  </form>
</div>
@endsection