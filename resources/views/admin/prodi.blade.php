@extends('layout.admin')

@section('content')
    @if (session()->has('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: {{ session('success') }},
                showConfirmButton: true,
            }).then(function(){
                location.reload();
            });
        </script>
    @endif

    <div class="row">
        {{-- <div class="card my-3">
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
        </div> --}}        

        {{-- card prodi --}}
        <div class="col-12">
            <div class="card my-3">
                <div class="card-header">
                    <div class="row text-nowrap align-items-center">
                        <div class="col-6">
                            <h4 class="mb-0">Data Prodi</h4>
                        </div>
                        <div class="col-6 text-end">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalProdi"><i class="bi bi-plus-circle-fill"></i> Tambah</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive py-3">
                        <table id="table-prodi" class="table table-hover table-striped py-3">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Program Studi</th>
                                    <th>Visi</th>
                                    <th>Misi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($prodi as $k => $pro)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pro->nama }}</td>
                                        <td>
                                            <ul>
                                                @foreach ($pro->getVisi as $visi)
                                                    @if ($visi != '')
                                                        <li>{{ $visi }}</li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                @foreach ($pro->getMisi as $misi)
                                                    @if ($misi != '')
                                                        <li>{{ $misi }}</li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        </td>
                                        <td class="text-nowrap">
                                            <button class="btn btn-danger btn-sm" onclick="deleteData('{{ route('prodi.destroy', ['prodi' => $pro->id]) }}')"><i class="bi bi-x"></i></button>
                                            <button class="btn btn-success btn-sm" onclick="showEditProdi('{{ $pro->id }}', '{{ route('prodi.update', ['prodi' => $pro->id]) }}', 'Edit Prodi')"><i class="bi bi-pencil-square"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>  
        {{-- end card prodi --}}

        {{-- card Kurikulum --}}
        <div class="col-12">
            <div class="card my-3">
                <div class="card-header">
                    <div class="row text-nowrap align-items-center">
                        <div class="col-6">
                            <h4 class="mb-0">Data Kurikulum</h4>
                        </div>
                        <div class="col-6 text-end">
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalKurikulum"><i class="bi bi-plus-circle-fill"></i> Tambah</button>
                        </div>
                    </div>
                </div>
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
                                        <td>{{ $kur->mata_kuliah }}</td>
                                        <td>{{ $kur->sks_teori }}</td>
                                        <td>{{ $kur->sks_praktek }}</td>
                                        <td>{{ $kur->jam }}</td>
                                        <td class="text-nowrap">
                                            <button class="btn btn-danger btn-sm" onclick="deleteData('{{ route('kurikulum.destroy', ['kurikulum' => $kur->id]) }}')"><i class="bi bi-x"></i></button>
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
        {{-- end card kurikulum --}}
    </div>

    <!-- Modal Prodi -->
    <div class="modal fade" id="modalProdi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalProdiTitle">Tambah Prodi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('prodi.store') }}" id="formModalProdi" method="POST">
                    <input type="hidden" name="_method" id="method-prodi" value="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama-prodi" class="form-label">Nama Program Studi</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama-prodi" value="{{ old('nama') }}" placeholder="Masukkan nama program studi">
                            @error('nama')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="visi" class="form-label">Visi</label>
                            <textarea name="visi" id="visi" class="form-control" cols="30" rows="4" oninput="handleInputVisi(event)" placeholder="Masukkan visi program studi">{{ old('visi') }}</textarea>
                            @error('visi')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="misi" class="form-label">Misi</label>
                            <textarea name="misi" id="misi" class="form-control" cols="30" rows="4" oninput="handleInputMisi(event)" placeholder="Masukkan misi program studi">{{ old('misi') }}</textarea>
                            @error('misi')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
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
    <!-- end Modal Prodi -->

    <!-- Modal Prodi -->
    <div class="modal fade" id="modalProdi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalProdiTitle">Tambah Prodi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('prodi.store') }}" id="formModalProdi" method="POST">
                    <input type="hidden" name="_method" id="method-prodi" value="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama-prodi" class="form-label">Nama Program Studi</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama-prodi" value="{{ old('nama') }}" placeholder="Masukkan nama program studi">
                            @error('nama')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="visi" class="form-label">Visi</label>
                            <textarea name="visi" id="visi" class="form-control" cols="30" rows="4" oninput="handleInputVisi(event)" placeholder="Masukkan visi program studi">{{ old('visi') }}</textarea>
                            @error('visi')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="misi" class="form-label">Misi</label>
                            <textarea name="misi" id="misi" class="form-control" cols="30" rows="4" oninput="handleInputMisi(event)" placeholder="Masukkan misi program studi">{{ old('misi') }}</textarea>
                            @error('misi')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
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
    <!-- end Modal Prodi -->

    {{-- modal kurikulum --}}
    <div class="modal fade" id="modalKurikulum" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalKurikulumTitle">Tambah Kurikulum</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('kurikulum.store') }}" id="formModalKurikulum" method="POST">
                    <input type="hidden" name="_method" id="method-kurikulum" value="post">
                    @csrf
                    <div class="modal-body">
                        <div class="row mb-3" id="headerModalKurikulum">
                            <div class="col-md-2 text-nowrap">
                                <button onclick="tambah()" type="button" data-toggle="tooltip" data-placement="top"
                                    title="Tambah Baris" class="btn btn-primary"><i class="bi bi-plus-circle"></i>
                                </button>
                                <button onclick="hapus()" type="button" data-toggle="tooltip" data-placement="top"
                                    title="Hapus Baris" class="btn btn-danger"><i class="bi bi-x-circle"></i>
                                </button>
                            </div>
                            <div class="col-md-5" id="cover-prodi">
                                <select id="prodi-select" class="form-select" onchange="cek_prodi(this.value)">
                                    <option value="">-Pilih-</option>
                                    @foreach ($prodi as $pro)
                                        <option value="{{ $pro->id }}">{{ $pro->nama }}</option>
                                    @endforeach
                                </select>
                                <small id="alert-prodi" style="display: none;">wajib dipilih !</small>
                            </div>
                        </div>

                        <table class="table">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Semester</th>
                                    <th>Kode</th>
                                    <th>Matkul</th>
                                    <th>SKS Teori</th>
                                    <th>SKS Praktik</th>
                                    <th>Jam</th>
                                </tr>
                            </thead>
                            <tbody id="insert-form">
                                <tr>
                                    <td>
                                        1.
                                    </td>
                                    <td>
                                        <input type="hidden" name="prodi[]">
                                        <input type="text" class="form-control" name="semester[]" id="semester" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="kode[]" id="kode-kur" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="matakuliah[]" id="matakuliah" class="form-control">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" name="sks_teori[]" id="sks_teori" class="form-control">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" name="sks_praktek[]" id="sks_praktek"  class="form-control">
                                    </td>
                                    <td>
                                        <input type="number" class="form-control" name="jam[]" id="jam-kur" class="form-control">
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                        <input type="hidden" id="jumlah-form" value="1">

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary waves-effect">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- end modal kurikulum --}}
@endsection

@push('after-script')
    @include('partials.deleteData')

    <script>
        $(document).ready(function() {
            $('#table-prodi').DataTable();
            $('#table-kurikulum').DataTable();
        });

        // bullet textarea
        function textAreaBullet(event){
            const bullet = "•";
            const newLength = event.target.value.length;
            const characterCode = event.target.value.substr(-1).charCodeAt(0);

            if (newLength > previousLengthMisi) {
                if (characterCode === 10) {
                event.target.value = `${event.target.value}${bullet} `;
                } else if (newLength === 1) {
                event.target.value = `${bullet} ${event.target.value}`;
                }
            }
        }

        let previousLengthVisi = 0;
        const handleInputVisi = (event) => {
            textAreaBullet(event);
        
            previousLengthVisi = newLength;
        }

        let previousLengthMisi = 0;
        const handleInputMisi = (event) => {
            textAreaBullet(event);
        
            previousLengthMisi = newLength;
        }

        // Prodi
        function showEditProdi(id, url, title){
            $.ajax({
                url: `/admin/prodi/${id}/edit`,
                type: 'get',
                success: function(data) {
                    console.log(data);
                    $('#modalProdiTitle').html(title);
                    $('#formModalProdi').attr('action', url);
                    $('#method-prodi').val('put');
                    $('#nama-prodi').val(data.nama);
                    $('#visi').val(data.visi);
                    $('#misi').val(data.misi);
                    $('#modalProdi').modal('show');
                }
            });
        }

        // Kurikulum
        function cek_prodi(val) {
            $("#alert-prodi").slideUp();
            let prodi = $("input[name='prodi[]']").map(function() {
                return $(this).val(val)
            }).get()
        }

        function tambah() {
            let pd = $("#prodi-select").val()
            let jm = parseInt($("#jumlah-form").val());
            let next = jm + 1;

            if (pd == '') {
                $("#alert-prodi").css('color', 'red');
                $("#alert-prodi").slideDown();
            } else {
                $("#alert-prodi").slideUp();

                $("#insert-form").append(

                        '<tr class="row-insert-'+next+'"">'+
                            '<td>'+next+'.&nbsp; </td>'+
                            '<td>'+
                                '<input type="hidden" name="prodi[]" value="'+pd+'">'+
                                '<input type="text" name="semester[]" class="form-control">'+
                            '</td>'+
                            '<td>'+
                                '<input type="text" name="kode[]" class="form-control">'+
                            '</td>'+
                            '<td>'+
                                '<input type="text" name="matakuliah[]" class="form-control">'+
                            '</td>'+
                            '<td>'+
                                '<input type="text" name="sks_teori[]" class="form-control">'+
                            '</td>'+
                            '<td>'+
                                '<input type="text" name="sks_praktek[]" class="form-control">'+
                            '</td>'+
                            '<td>'+
                                '<input type="number" name="jam[]" class="form-control">'+
                            '</td>'+
                        '</tr>'
                );
                $("#jumlah-form").val(next);
            }
        }

        function hapus() {
            let total_row = $('#jumlah-form').val();
            
            $('.row-insert-'+ total_row).remove();
            if(total_row > 1){
                $("#jumlah-form").val(total_row - 1);
            }
        }

        function showEditKurikulum(id, url, title){
            $.ajax({
                url: `/admin/kurikulum/${id}/edit`,
                type: 'get',
                success: function(data) {
                    $('#modalKurikulumTitle').html(title);
                    $('#formModalKurikulum').attr('action', url);
                    $('#method-kurikulum').val('put');
                    $('#headerModalKurikulum').remove();
                    $('#semester').val(data.semester);
                    $('#kode-kur').val(data.kode);
                    $('#matakuliah').val(data.mata_kuliah);
                    $('#sks_teori').val(data.sks_teori);
                    $('#sks_praktek').val(data.sks_praktek);
                    $('#jam-kur').val(data.jam);
                    $('#modalKurikulum').modal('show');
                }
            });
        }
    </script>
@endpush