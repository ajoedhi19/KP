@extends('admin/master')

@section('content')
<div class="container-fluid">
<form action="{{ url('admin/tambah') }}" method="post">
    @csrf
    <div class="form-group">
      <label for="nama_mitra">Nama Mitra</label>
      <input type="Text" class="form-control" id="nama_mitra" aria-describedby="emailHelp" placeholder="nama mitra" name="nama_mitra" autofocus >
    </div>
    
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" >
    
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Password" name="password" >
    </div>
    <div class="form-group">
        <label for="Role">Role</label>
        <select class="form-select" aria-label="Default select example" name="Role" id="Role" required="required">
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