@extends('layout.admin')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-daftar-tab" data-bs-toggle="pill" data-bs-target="#pills-daftar" type="button" role="tab" aria-controls="pills-daftar" aria-selected="true">Pendaftaran</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-syarat-tab" data-bs-toggle="pill" data-bs-target="#pills-syarat" type="button" role="tab" aria-controls="pills-syarat" aria-selected="false">Persyaratan</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-biaya-tab" data-bs-toggle="pill" data-bs-target="#pills-biaya" type="button" role="tab" aria-controls="pills-biaya" aria-selected="false">Biaya Kuliah</button>
                        </li>
                    </ul>
                    <div class="tab-content mt-4" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-daftar" role="tabpanel" aria-labelledby="pills-daftar-tab">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="d-flex">
                                        <div class="bd-highlight me-auto">
                                            <h5>Pembiayaan :</h5>
                                        </div>
                                        <div class="bd-highlight">
                                            <button class="btn btn-primary"><i class="bi bi-plus-circle-fill"></i> Tambah</button>
                                        </div>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Pembiayaan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1.</td>
                                                    <td>Reguler</td>
                                                    <td class="text-nowrap">
                                                        <button class="btn btn-danger btn-sm"><i class="bi bi-x"></i></button>
                                                        <button class="btn btn-success btn-sm"><i class="bi bi-pencil-square"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <tr>
                                                <td>Masa Pendaftaran</td>
                                                <td>:</td>
                                                <td>Januari 2022 - 30 September 2022</td>
                                            </tr>
                                            <tr>
                                                <td>Terakhir Pembayaran</td>
                                                <td>:</td>
                                                <td>10 Oktober 2022</td>
                                            </tr>
                                            <tr>
                                                <td>Bank</td>
                                                <td>:</td>
                                                <td>BNI</td>
                                            </tr>
                                            <tr>
                                                <td>Rekening</td>
                                                <td>:</td>
                                                <td>666-666-4676</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="text-end">
                                        <button class="btn btn-success"><i class="bi bi-pencil-square"></i> Ubah</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-syarat" role="tabpanel" aria-labelledby="pills-syarat-tab">
                            <div class="row">
                                <div class="col">
                                    <div class="d-flex">
                                        <div class="bd-highlight me-auto">
                                            <h5>Persyaratan :</h5>
                                        </div>
                                        <div class="bd-highlight">
                                            <button class="btn btn-primary"><i class="bi bi-plus-circle-fill"></i> Tambah</button>
                                        </div>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Persyaratan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Fotocopy Ijazah</td>
                                                    <td class="text-nowrap">
                                                        <button class="btn btn-danger btn-sm"><i class="bi bi-x"></i></button>
                                                        <button class="btn btn-success btn-sm"><i class="bi bi-pencil-square"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-biaya" role="tabpanel" aria-labelledby="pills-biaya-tab">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Program Studi</th>
                                            <th>Uang Pangkal</th>
                                            <th>SPP</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Teknik Otomotif</td>
                                            <td>3500000</td>
                                            <td>3000000</td>
                                            <td class="text-nowrap">
                                                <button class="btn btn-success btn-sm"><i class="bi bi-pencil-square"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row my-3">
        <div class="col-md-6">
            <div class="card my-3">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div class="bd-highlight me-auto">
                            <h5 class="mb-0"><i class="bi bi-calendar"></i> Tahun Akademik</h5>
                        </div>
                        <div class="bd-highlight">
                            <button class="btn btn-primary"><i class="bi bi-plus-circle-fill"></i> Tambah</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tahun Akademik</th>
                                    <th>Status Aktif</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>2020/2021</td>
                                    <td>
                                        <div class="switch">
                                            <label>
                                                <input type="checkbox">
                                                <span class="lever switch-col-blue"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td class="text-nowrap">
                                        <button class="btn btn-danger btn-sm"><i class="bi bi-x"></i></button>
                                        <button class="btn btn-success btn-sm"><i class="bi bi-pencil-square"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card my-3">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div class="bd-highlight me-auto">
                            <h5 class="mb-0"><i class="bi bi-person-lines-fill"></i> Akun Admin</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Mariyam</td>
                                    <td>mariyam@gmail.com</td>
                                    <td class="text-nowrap">
                                        <button class="btn btn-success btn-sm"><i class="bi bi-pencil-square"></i> Ubah</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <div class="bd-highlight me-auto">
                            <h5 class="mb-0"><i class="bi bi-file-earmark-text"></i> Deskripsi Beasiswa</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <td class="border-0">
                                    <form action="">
                                        <label>Tanggal Berakhir Beasiswa Unggulan</label>
                                        <input type="text" class="form-control" name="tanggal-beasiswa" id="tanggal-beasiswa">
                                        <div class="d-grid gap-1 pt-3">
                                            <button class="btn btn-success btn-block">Simpan</button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection