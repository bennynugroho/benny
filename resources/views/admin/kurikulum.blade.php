@extends('layout.admin')

@section('content')
    <div class="row">
        <div class="card my-3">
            <div class="card-body">
                <div class="row text-nowrap">
                    <div class="col-6">
                        <h3>Data Kurikulum</h3>
                    </div>
                    <div class="col-6 text-end">
                        <button class="btn btn-primary"><i class="bi bi-plus-circle-fill"></i> Tambah</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card my-3">
            <div class="card-body">
                <div class="table-responsive py-3">
                    <table id="table-kurikulum" class="table table-hover table-striped py-3">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Program Studi</th>
                                <th>Semester</th>
                                <th>Kode</th>
                                <th>Mata Kuliah</th>
                                <th>SKS Teori</th>
                                <th>SKS Praktek</th>
                                <th>Jam</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kurikulum as $k => $kur)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $kur->prodi }}</td>
                                    <td>{{ $kur->semester }}</td>
                                    <td>{{ $kur->kode }}</td>
                                    <td>{{ $kur->matakuliah }}</td>
                                    <td>{{ $kur->sks_teori }}</td>
                                    <td>{{ $kur->sks_praktek }}</td>
                                    <td>{{ $kur->jam }}</td>
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
            $('#table-kurikulum').DataTable();
        });
    </script>
@endpush