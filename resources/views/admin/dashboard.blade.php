@extends('layout.admin')

<div class="row">
    <div class="col-12">
        <div class="card my-3">
            <div class="card-body">
                <h3>Data Pendaftar</h3>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card my-3">
            <div class="card-body">
                <table class="mb-3">
                    <tr>
                        <th>Tahun Akademik</th>
                        <td class="px-3">:</td>
                        <td>
                            <select name="tahun_akademik" id="tahun_akademik">
                                <option value="">2022/2023</option>
                                <option value="">2022/2023</option>
                                <option value="">2022/2023</option>
                            </select>
                        </td>
                    </tr>
                </table>

                <div class="table-responsive mb-3">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr class="align-items-center">
                                <th><input type="checkbox"></th>
                                <th>No</th>
                                <th>Nama</th>
                                <th>No Telp</th>
                                <th>Pembiayaan</th>
                                <th>Asal Sekolah</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Konfirmasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>1</td>
                                <td>Budi Utomo</td>
                                <td>08123456789</td>
                                <td>Reguler</td>
                                <td>SMK Lestari</td>
                                <td>12 Jan 2022</td>
                                <td><span class="badge bg-danger">Belum</span></td>
                                <td>
                                    <div class="switch">
                                        <label>
                                            <input type="checkbox">
                                            <span class="lever switch-col-blue"></span>
                                        </label>
                                    </div>
                                </td>
                                <td class="text-nowrap">
                                    <button class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus"><i class="bi bi-x"></i></button>
                                    <button class="btn btn-primary"><i class="bi bi-person-fill"></i></button>
                                    <button class="btn btn-warning text-white"><i class="bi bi-printer-fill"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
    
                <button class="btn btn-danger"><i class="bi bi-x-circle-fill"></i> Hapus</button>
            </div>
        </div>
    </div>
</div>