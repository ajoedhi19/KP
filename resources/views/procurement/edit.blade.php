@extends('procurement/master')

@section('content')
<div class="container-fluid">
<form action="{{ url('procurement/edit',$data->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="nama_mitra">Nama Mitra</label>
      <input type="Text" class="form-control" id="nama_mitra" aria-describedby="emailHelp" placeholder="nama mitra" name="nama_mitra" autofocus value={{ old('nama_mitra' ,$data->nama_mitra) }}>
    </div>
    <div class="form-group">
      <label for="Jenis_KHS"><i class="zmdi zmdi-filter-list"></i></label>
      <select class="form-select" aria-label="Default select example" name="Jenis_KHS" id="Jenis_KHS" required value={{ old('nama_mitra' ,$data->Jenis_KHS) }}>
      <option selected>Jenis KHS</option>
      <option value="KHS">KHS</option>
      <option value="IOAN">IOAN</option>
      </select>
    </div>
    <div class="form-group">
      <label for="Nomor_KHS">Nomor KHS</label>
      <input type="Text" class="form-control" id="Nomor_KHS" aria-describedby="emailHelp" placeholder="Nomor KHS" name="Nomor_KHS" value={{ old('Nomor_KHS' ,$data->Nomor_KHS) }}>
    </div>
    <div class="form-group">
      <label for="Tanggal_Berakhir_KHS">Tanggal Berakhir KHS</label>
      <input type="date" class="form-control" id="Tanggal_Berakhir_KHS" aria-describedby="emailHelp" placeholder="Tanggal Berakhir KHS" name="Tanggal_Berakhir_KHS" value={{ old('Tanggal_Berakhir_KHS' ,$data->Tanggal_Berakhir_KHS) }}>
    </div>
    <div class="form-group">
      <label for="Nama_Penanggung_Jawab">Nama Penanggung Jawab</label>
      <input type="Text" class="form-control" id="Nama_Penanggung_Jawab" aria-describedby="emailHelp" placeholder="Nama Penanggung Jawab" name="Nama_Penanggung_Jawab" value={{ old('Nama_Penanggung_Jawab' ,$data->Nama_Penanggung_Jawab) }}>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" value={{ old('email' ,$data->email) }}>
    </div>
    <div class="form-group">
      <label for="Alamat_Penanggung_Jawab">Alamat Penanggung Jawab</label>
      <textarea class="form-control" name="Alamat_Penanggung_Jawab" id="Alamat_Penanggung_Jawab" cols="3" rows="3" value={{ old('Alamat_Penanggung_Jawab' ,$data->Alamat_Penanggung_Jawab) }}>{{ $data->Alamat_Penanggung_Jawab }}</textarea>
    </div>
    <div class="form-group">
      <label for="No_Identitas">No Identitas</label>
      <input type="Text" class="form-control" id="No_Identitas" aria-describedby="emailHelp" placeholder="No Identitas" name="No_Identitas" value={{ old('No_Identitas' ,$data->No_Identitas) }}>
    </div>
    <div class="form-group">
      <label for="Foto_Identitas">Foto Identitas</label>
      <input type="file" class="form-control" id="Foto_Identitas" aria-describedby="emailHelp" placeholder="Foto Identitas" name="Foto_Identitas" value={{ old('No_Identitas' ,$data->No_Identitas) }}>
    </div>
    <div class="form-group">
      <label for="Jumlah_Minimal_Naker">Jumlah Minimal Naker</label>
      <input type="Text" class="form-control" id="Jumlah_Minimal_Naker" aria-describedby="emailHelp" placeholder="Jumlah Minimal Naker" name="Jumlah_Minimal_Naker" value={{ old('Jumlah_Minimal_Naker' ,$data->Jumlah_Minimal_Naker) }}>
    </div>
    <div class="form-group">
      <label for="Role">Status</label>
      <select class="form-select" aria-label="Default select example" name="Role" id="Role" required value={{ old('Role' ,$data->Role) }}>
          <option value="0">Ditolak</option>
          <option value="8">Disetujui</option>
        </select>
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection