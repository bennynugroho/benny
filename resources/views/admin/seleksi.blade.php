@extends('layout.admin')

@section('content')
    <div class="row">
        <div class="card my-3">
            <div class="card-body">
                <div class="row text-nowrap">
                    <div class="col-6">
                        <h3>Data Calon Mahasiswa Yang Lolos Seleksi</h3>
                    </div>
                    <div class="col-6 text-end">
                        <button class="btn btn-primary"><i class="bi bi-plus-circle-fill"></i> Tambah</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card my-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-6 my-3">
                        <select name="tahun-akademik" id="tahun-akademik">
                            <option value="">-Tahun Akademik-</option>
                            @foreach ($tahun_akademik as $thn)
                                <option value="{{ $thn->id }}">{{ $thn->tahun }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="table-responsive py-3">
                    <table id="table-seleksi" class="table table-hover table-striped py-3">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tahun Akademik</th>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>Asal Sekolah</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($seleksi as $s => $sel)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $sel->tahun_akademik->tahun }}</td>
                                    <td>{{ $sel->daftar->nama }}</td>
                                    <td>{{ $sel->nim }}</td>
                                    <td>{{ $sel->asal_sekolah }}</td>
                                    <td class="text-nowrap">
                                        <button class="btn btn-danger btn-sm"><i class="bi bi-x"></i></button>
                                        <button class="btn btn-success btn-sm"><i class="bi bi-pencil-square"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('after-script')
    <script>
        $(document).ready(function() {
            $('#table-seleksi').DataTable();
        });
    </script>
@endpush