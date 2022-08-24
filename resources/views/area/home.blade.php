@extends('mitra/master')




@section('yield')
    <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css') }}">
@endsection

@section('Judul')
    Data Tenaga Kerja
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="{{ url('mitra/tambah') }}" class="btn btn-primary mb-3">Tambah Tenaga Kerja</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nama_Mitra</th>
                        <th>Jenis_KHS</th>
                        <th>Nomor_KHS</th>
                        <th>Tanggal_Berakhir_KHS</th>
                        <th>Nama_Penanggung_Jawab</th>
                        <th>Email_Penanggung_Jawab</th>
                        <th>No_HP</th>
                        <th>Alamat_Penanggung_Jawab</th>
                        <th>No_Identitas</th>
                        <th>Foto_Identitas</th>
                        <th>Jumlah_Minimal_Naker</th>
                        <th>Status_Mitra</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <!-- Page level plugins -->
    <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
@endpush

    
