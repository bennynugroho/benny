@extends('layout.admin')

@push('after-style')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    
    <style>
        .select2-container .select2-selection--single {
        height: 35px;
        }
        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 35px;
        }
        .select2-container--default .select2-selection--single {
            border: unset;
            border-bottom: 1px solid #aaa;
            border-radius: 0;
        }
        .select2-container--default .select2-selection--single .select2-selection__arrow {
            right: 0;
        }
    </style>
@endpush

@section('content')
    <div class="row">
        <div class="card my-3">
            <div class="card-body">
                <div class="row text-nowrap">
                    <div class="col-6">
                        <h3>Data Calon Mahasiswa Yang Lolos Seleksi</h3>
                    </div>
                    <div class="col-6 text-end">
                        <button class="btn btn-primary" onclick="showCreateSeleksi('{{ route('seleksi.store') }}')"><i class="bi bi-plus-circle-fill"></i> Tambah</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card my-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-6 my-3">
                        <select name="tahun-akademik" id="tahun-akademik" onchange="changeTahun(this.value)">                            
                            @foreach ($tahun_akademik as $thn)
                                <option {{ $thn->id == $tahun_id->id ? 'Selected' : '' }} value="{{ $thn->id }}">{{ $thn->tahun }}</option>
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
                        <tbody id="tbody-seleksi"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalSeleksi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="titleModalSeleksi">Tambah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('seleksi.store') }}" method="POST" id="formModalSeleksi">
                    <div class="modal-body">
                        <input type="hidden" name="tahun_id" value="{{ $tahun_id->id }}">
                        <input type="hidden" name="_method" id="methodModalSeleksi" value="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" for="">Calon Mahasiswa</label>
                            <select class="form-select" name="daftar_id" required>
                                @foreach ($pendaftar as $daftar)
                                    <option value="{{ $daftar->id }}">{{ $daftar->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim" required>
                        </div>
                        <div class="mb-3">
                            <label for="slta" class="form-label">Asal Sekolah</label>
                            <input type="text" class="form-control" id="slta" name="slta" required>
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
    @include('partials.alert')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.select2-add').select2();
            $('#table-seleksi').DataTable();
            showSeleksiTable({{ $tahun_id->id }});
        });

        function changeTahun(tahun_id){
            showSeleksiTable(tahun_id);
        }

        function showSeleksiTable(tahun_id){
            $.ajax({
                url: '/admin/table-seleksi',
                type: 'get',
                data: {
                    'tahun_id': tahun_id,
                },
                success: function(data) {
                    $('#tbody-seleksi').html(data);
                }
            });
        }

        function showCreateSeleksi(url_store){
            $('#titleModalSeleksi').html('Tambah Data');
            $('#daftar_id').val('');
            $('#daftar_id').attr('disabled', false);
            $('#nim').val('');
            $('#slta').val('');
            $('#formModalSeleksi').attr('action', url_store);
            $('#methodModalSeleksi').val('post');

            $('#modalSeleksi').modal('show');
        }

        function showEditSeleksi(url_edit, url_update, title){
            $.ajax({
                url: url_edit,
                type: 'get',
                success: function(data) {
                    $('#titleModalSeleksi').html('Ubah Data');
                    $('#formModalSeleksi').attr('action', url_update);
                    $('#methodModalSeleksi').val('put');
                    $('#daftar_id').val(data.daftar_id);
                    $('#daftar_id').attr('aria-disabled', true);
                    $('#nim').val(data.nim);
                    $('#slta').val(data.asal_sekolah);
                    
                    $('#modalSeleksi').modal('show');
                }
            });
        }
    </script>
@endpush