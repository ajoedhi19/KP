@extends('Regional/master')


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
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Tanggal Lahir</th>
                        <th>Tempat Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>No KTP</th>
                        <th>Foto KTP</th>
                        <th>No KK</th>
                        <th>No Kartu BPJS</th>
                        <th>No NPWP</th>
                        <th>No HP</th>
                        <th>No Telpon Keluarga</th>
                        <th>Nama Keluarga</th>
                        <th>Email</th>
                        <th>Witel</th>
                        <th>Status Tenaga Kerja</th>
                        <th>Direktorat</th>
                        <th>Level Pendidika</th>
                        <th>Posisi</th>
                        <th>Mitra</th>
                        <th>Tanggal Pengajuan</th>
                        <th>NIK Waspag TA</th>
                        <th>Regional</th>
                        <th>Status Kepegawaian</th>
                        <th>Tanggal Mulai Kontrak</th>
                        <th>Tanggal Akhir Kontrak</th>
                        <th>Kontrak Kerja</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $key => $isi)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$isi->Nama}}</td>
                        <td>{{ $isi->NIK }}</td>
                        <td>{{ $isi->Tanggal_Lahir }}</td>
                        <td>{{ $isi->Tempat_Lahir }}</td>
                        <td>{{ $isi->Jenis_Kelamin }}</td>
                        <td>{{ $isi->Alamat }}</td>
                        <td>{{ $isi->No_KTP }}</td>
                        <td><a href="{{ asset('storage/' . $isi->Foto_KTP) }}" ><img style="max-height:100px; max-width:100px;" src="{{ asset('storage/' . $isi->Foto_KTP) }}" alt="{{ $isi->Foto_KTP }}"></a></td>
                        <td>{{ $isi->No_KK }}</td>
                        <td>{{ $isi->No_Kartu_BPJS }}</td>
                        <td>{{ $isi->No_NPWP }}</td>
                        <td>{{ $isi->No_HP }}</td>
                        <td>{{ $isi->No_Telpon_Keluarga }}</td>
                        <td>{{ $isi->Nama_Keluarga }}</td>
                        <td>{{$isi->Email}}</td>
                        <td>{{$isi->witel}}</td>
                        <td>
                            @if ( $isi->status_naker == 0 )
                                <button class = "btn btn-danger d-inline">Non Active</button>
                            @else
                                <button class = "btn btn-success d-inline">Active</button>
                             @endif
                        </td>
                        <td>{{ $isi->direktorat }}</td>
                        <td>{{ $isi->Level_Pendidikan }}</td>
                        <td>{{ $isi->Posisi }}</td>
                        <td>{{ $isi->nama_mitra }}</td>
                        <td>{{ $isi->Tanggal_Pengajuan }}</td>
                        <td>{{ $isi->NIK_Waspag_TA }}</td>
                        <td>{{ $isi->Regional }}</td>
                        <td>{{ $isi->Status_Kepegawaian }}</td>
                        <td>{{ $isi->Tanggal_Mulai_Kontrak }}</td>
                        <td>{{ $isi->Tanggal_Akhir_Kontrak }}</td>
                        <td><a href="{{ asset('storage/' . $isi->Kontrak_Kerja) }}" >File Kontrak</a></td>
                        <td>
                            @if ( ($isi->Roles) == 0 )
                                <button class = "btn btn-danger d-inline">Belum diverfikasi</button>
                            @else
                                <button class = "btn btn-success d-inline">Terverifikasi</button>
                            @endif
                        </td>
                        <td>
                            <a href="{{ url('regional/edit',$isi->id) }}" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
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
