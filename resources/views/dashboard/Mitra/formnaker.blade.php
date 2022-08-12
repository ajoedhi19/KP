<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Apply for job by Colorlib</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">


    <!-- Main CSS-->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Form Naker</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row">
                            <div class="name">Nama</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="Nama">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Tanggal Lahir</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="date" name="Tanggal_Lahir">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Tempat Lahir</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="Tempat_Lahir">
                                    {{-- <textarea class="textarea--style-6" name="Tempat_Lahir"></textarea> --}}
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Jenis Kelamin</div>
                            <div class="value">
                                <label for="Jenis_KHS"><i class="zmdi zmdi-filter-list"></i></label>
                                <select class="form-select" aria-label="Default select example" name="Jenis_KHS" id="Jenis_KHS" required>
                                    <option selected>Jenis Kelamin</option>
                                    <option value="1">Laki-Laki</option>
                                    <option value="2">Perempuan</option>
                                  </select>
                            </div>
                            </div>
                        <div class="form-row">
                            <div class="name">Alamat</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="Alamat"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">No KTP</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="date" name="No_KTP">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Upload KTP</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="Upload_KTP" id="file">
                                    <label class="label--file" for="file">Pilih file</label>
                                    <span class="input-file__info">Tidak ada file terpilih</span>
                                </div>
                                <div class="label--desc">Unggah file KTP</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">No KK</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="No_KK">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">No Kartu BPJS Kesehatan</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="No_Kartu_BPJS_Kesehatan">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">No NPWP</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="No_NPWP">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">No HP</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="No_HP">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">No Telepon Kerluarga</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="No_Telepon_Keluarga">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Nama Kerluarga</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="Nama_Keluarga">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="email" name="Email">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Witel/Area</div>
                            <div class="value">
                                <label for="Witel"><i class="zmdi zmdi-filter-list"></i></label>
                                <select class="form-select" aria-label="Default select example" name="Witel" id="Witel" required>
                                    <option selected>Witel</option>
                                    <option value="1">Witel Denpasar</option>
                                    <option value="2">Witel Gresik</option>
                                    <option value="3">Witel Jember</option>
                                    <option value="4">Witel Kediri</option>
                                    <option value="5">Witel Kupang</option>
                                    <option value="6">Witel Madiun</option>
                                    <option value="7">Witel Malang</option>
                                    <option value="8">Witel Mataram</option>
                                    <option value="9">Witel Pasuruan</option>
                                    <option value="10">Witel Sidoarjo</option>
                                    <option value="11">Witel Singaraja</option>
                                    <option value="12">Surabaya</option>
                                  </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Status Naker</div>
                            <div class="value">
                                <label for="Status_Naker"><i class="zmdi zmdi-filter-list"></i></label>
                                <select class="form-select" aria-label="Default select example" name="Status_Naker" id="Status_Naker" required>
                                    <option selected>Status</option>
                                    <option value="1">Active</option>
                                    <option value="2">Non Active</option>
                                  </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Direktorat</div>
                            <div class="value">
                                <label for="Direktorat"><i class="zmdi zmdi-filter-list"></i></label>
                                <select class="form-select" aria-label="Default select example" name="Direktorat" id="Direktorat" required>
                                    <option selected>Direktorat</option>
                                    <option value="1">Construction</option>
                                    <option value="2">Corporate Office Group</option>
                                    <option value="3">Finance</option>
                                    <option value="4">Human Capital Management & Strategy</option>
                                    <option value="5">Operation</option>
                                    <option value="6">Supply & Commerce</option>
                                  </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Level Pendidikan</div>
                            <div class="value">
                                <label for="Level_Pendidikan"><i class="zmdi zmdi-filter-list"></i></label>
                                <select class="form-select" aria-label="Default select example" name="Level_Pendidikan" id="Level_Pendidikan" required>
                                    <option selected>Level Pendidikan</option>
                                    <option value="30">SMA</option>
                                    <option value="34">STM</option>
                                    <option value="40">D1</option>
                                    <option value="42">D2</option>
                                    <option value="34">D3</option>
                                    <option value="50">S1</option>
                                    <option value="60">S2</option>
                                    <option value="61">SMK</option>
                                    <option value="62">MAN</option>
                                    <option value="63">SMP</option>
                                    <option value="64">SD</option>
                                    <option value="65">SMEA</option>
                                    <option value="66">D4</option>
                                  </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Posisi</div>
                            <div class="value">
                                <label for="Posisi"><i class="zmdi zmdi-filter-list"></i></label>
                                <select class="form-select" aria-label="Default select example" name="Posisi" id="Posisi" required>
                                    <option selected>Posisi</option>
                                    <option value="1">Teknisi Provisioning</option>
                                    <option value="2">Teknisi Migrasi</option>
                                    <option value="3">Teknisi Wilsus</option>
                                    <option value="4">Teknisi IOAN</option>
                                    <option value="5">Teknisi BGES Serices</option>
                                  </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Supplier ID</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="Supplier_ID">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Nama Mitra</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="Nama_Mitra">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Tanggal Pengajuan</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="date" name="Tanggal_Pengajuan">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">NIK Waspag TA</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="NIK_Waspag_TA">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Regional</div>
                            <div class="value">
                                <label for="Regional"><i class="zmdi zmdi-filter-list"></i></label>
                                <select class="form-select" aria-label="Default select example" name="Regional" id="Regional" required>
                                    <option selected>Regional</option>
                                    <option value="1">Jatim Bali Nusra</option>
                                  </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Status Kepegawaian</div>
                            <div class="value">
                                <label for="Status_Kepegawaian"><i class="zmdi zmdi-filter-list"></i></label>
                                <select class="form-select" aria-label="Default select example" name="Status_Kepegawaian" id="Status_Kepegawaian" required>
                                    <option selected>Status Kepegawaian</option>
                                    <option value="1">Kontrak</option>
                                    <option value="1">Tetap</option>
                                  </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Tanggal Mulai Kontrak</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="date" name="Tanggal_Mulai_Kontrak">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Tanggal Berakhir Kontrak</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="date" name="Tanggal_Berakhir_Kontrak">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Upload Kontrak Kerja</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="Upload_Kontrak_Kerja" id="file">
                                    <label class="label--file" for="file">Pilih file</label>
                                    <span class="input-file__info">Tidak ada file terpilih</span>
                                </div>
                                <div class="label--desc">Unggah file Kontrak Kerja</div>
                            </div>
                        </div>
                    </form>
                    
                </div>
                <div class="card-footer">
                    <button class="btn btn--radius-2 btn--blue-2" type="submit">Tambah Tenaga Kerja</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="{{ asset('js/global.js') }}"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->