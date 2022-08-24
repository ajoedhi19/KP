@extends('admin/master')

@section('content')
<div class="container-fluid">
<form action="{{ url('admin/edit',$data->id) }}" method="post">
    @csrf
    <div class="form-group">
        <label for="nama_mitra">Nama</label>
        <input type="Text" class="form-control" id="nama_mitra" aria-describedby="emailHelp" placeholder="Nama" name="nama_mitra" autofocus value={{ old('nama_mitra' ,$data->nama_mitra) }}>
      </div>
      
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" value={{ old('email' ,$data->email) }} >
      
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Password" name="password" value={{ old('password' ,$data->password) }}>
      </div>
      <div class="form-group">
          <label for="Role">Role</label>
          <select class="form-select" aria-label="Default select example" name="Role" id="Role" required="required" value={{ old('Role' ,$data->Role) }}>
              <option selected>Pilih Role</option>
              <option value="2">Procurement</option>
              <option value="3">HR Regional</option>
              <option value="4">HR Area</option>
              <option value="5">FA</option>
              <option value="6">TL</option>
              <option value="7">FA</option>
          </select>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection