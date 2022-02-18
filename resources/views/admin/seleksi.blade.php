@extends('layout.admin')

@push('after-style')
    <link rel="stylesheet" href="{{ asset('admin/vendors/choices.js/choices.min.css') }}">
@endpush

@section('content')
    <div class="row">
        <div class="page-title">
            <div class="row text-nowrap">
                <div class="col-6">
                    <h3>Data Hasil Seleksi</h3>
                </div>
                <div class="col-6 text-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCreateSeleksi"><i class="bi bi-plus-circle-fill"></i> Tambah</button>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card my-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <form action="{{ route('seleksi.index') }}" method="GET">
                                <table>
                                    <tbody>
                                        <th>Tahun Akademik</th>
                                        <td class="px-3">:</td>
                                        <td>
                                            <select class="form-select" name="tahun_akademik" id="tahun_akademik" onchange="this.form.submit(this.val)">
                                                @foreach ($tahun_akademik as $thn)
                                                    <option {{ $thn->id == $tahun_id ? 'Selected' : '' }} value="{{ $thn->id }}">{{ $thn->tahun }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                        <div class="col-6 text-end">
                            <a href="/admin/export-seleksi" target="_blank" class="btn btn-warning"><i class="bi bi-file-earmark-excel"></i> Export to Excel</a>
                        </div>
                    </div>
                    <div class="table-responsive py-3">
                        <table id="tableSeleksi" class="table table-hover table-striped py-3">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tahun Akademik</th>
                                    <th>Nama</th>
                                    <th>Nomor Pendaftaran</th>
                                    <th>Jalur Masuk</th>
                                    <th>Asal Sekolah</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="tbody-seleksi">
                                @foreach ($seleksi as $sel)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $sel->tahun_akademik->tahun }}</td>
                                    <td>{{ $sel->daftar->nama }}</td>
                                    <td>{{ $sel->no_pendaftaran }}</td>
                                    <td>{{ $sel->daftar->jalur->judul }}</td>
                                    <td>{{ $sel->daftar->slta }}</td>
                                    <td class="text-nowrap">
                                        <button class="btn btn-danger btn-sm" onclick="deleteData('{{ route('seleksi.destroy', ['seleksi' => $sel->id]) }}')"><i class="bi bi-x"></i></button>
                                        <button class="btn btn-success btn-sm" onclick="showEditSeleksi('{{ route('seleksi.edit', ['seleksi' => $sel->id]) }}', '{{ route('seleksi.update', ['seleksi' => $sel->id]) }}')"><i class="bi bi-pencil-square"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal create seleksi -->
    <div class="modal fade" id="modalCreateSeleksi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('seleksi.store', ['tahun_id' => $tahun_id]) }}" method="POST">
                    <div class="modal-body">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="">Calon Mahasiswa</label>
                            <select class="choices" name="daftar_id"  required>
                                @foreach ($pendaftar as $daftar)
                                    <option value="{{ $daftar->id }}">{{ $daftar->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="no-pendaftaran-create" class="form-label">Nomor Pendaftaran</label>
                            <input type="text" class="form-control" id="no-pendaftaran-create" name="no_pendaftaran" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal edit seleksi -->
    <div class="modal fade" id="modalEditSeleksi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="POST" id="formModalEditSeleksi">
                    <div class="modal-body">
                        <input type="hidden" name="tahun_id" value="{{ $tahun_id }}">
                        <input type="hidden" name="daftar_id" id="daftar_id">
                        @method('put')
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="">Calon Mahasiswa</label>
                            <input type="text" class="form-control" name="nama_mhs" id="nama_mhs" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="no_pendaftaran" class="form-label">Nomor Pendaftaran</label>
                            <input type="text" class="form-control" id="no_pendaftaran" name="no_pendaftaran" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('after-script')
    @include('partials.deleteData')
    
    <script src="{{ asset('admin/vendors/choices.js/choices.min.js') }}"></script>

    <script>        
        // showSeleksiTable({{ $tahun_id }});

        let tableSeleksi = document.querySelector('#tableSeleksi');
        let dataTable = new simpleDatatables.DataTable(tableSeleksi);

        function changeTahun(tahun_id){
            showSeleksiTable(tahun_id);
        }

        function showEditSeleksi(url_edit, url_update, title){
            $.ajax({
                url: url_edit,
                type: 'get',
                success: function(data) {
                    $('#formModalEditSeleksi').attr('action', url_update);
                    $('#methodModalSeleksi').val('put');
                    $('#daftar_id').val(data.daftar_id);
                    $('#nama_mhs').val(data.daftar.nama);
                    $('#no-pendaftaran-create').val(data.no_pendaftaran);
                    
                    $('#modalEditSeleksi').modal('show');
                }
            });
        }
    </script>
@endpush