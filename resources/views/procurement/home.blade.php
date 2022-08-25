@extends('procurement/master')


@section('yield')
    <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css') }}">
@endsection

@section('Judul')
    Data Mitra
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
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
                    @foreach($data as $key => $isi)
                    <tr>

                        <td>{{$key+1}}</td>
                        <td>{{$isi->nama_mitra}}</td>
                        <td>{{$isi->Jenis_KHS}}</td>
                        <td>{{$isi->Nomor_KHS}}</td>
                        <td>{{$isi->Tanggal_Berakhir_KHS}}</td>
                        <td>{{$isi->Nama_Penanggung_Jawab}}</td>
                        <td>{{$isi->email}}</td>
                        <td>{{$isi->No_HP}}</td>
                        <td>{{$isi->Alamat_Penanggung_Jawab}}</td>
                        <td>{{$isi->No_Identitas}}</td>
                        <td><a href="{{ asset('storage/' . $isi->Foto_Identitas) }}" ><img style="max-height:100px; max-width:100px;" src="{{ asset('storage/' . $isi->Foto_Identitas) }}" alt="{{ $isi->Foto_Identitas }}"></a></td>
                        <td>{{$isi->Jumlah_Minimal_Naker}}</td>
                        <td><button class = "btn btn-danger">Belum Diverifikasi</button></td>
                        <td>
                            <a href="{{ url('procurement/edit',$isi->id) }}" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                              </svg></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
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
