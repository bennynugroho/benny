@extends('layout.admin')

@push('after-script')
    @include('partials.deleteData')

    <script>
        $(document).ready(function(){
            showTablePendaftar({{ $tahun_id->id }});
        });

        function showTablePendaftar(tahun_id){
            $.ajax({
                url: '/admin/table-pendaftar',
                data:{
                    'tahun_id': tahun_id,
                },
                type: 'get',
                success: function(data) {
                    $('#tbody-pendaftar').html(data);
                }
            });
        }

        function changeTahun(tahun_id){
            showTablePendaftar(tahun_id);
        }

        function updateStatus(id, element){
            let status = $('#checkbox-pendaftar-'+ id).is(':checked') ? '1' : '0';

            $.ajax({
                type: "get",
                url: "/admin/status-pendaftar",
                data: {
                    "id": id,
                    "status": status
                },
                success: function (d) {
                    if (d == 1) {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                            })

                            Toast.fire({
                            icon: 'success',
                            title: 'Data berhasil dikonfirmasi'
                        })
                    } else {
                        $('#checkbox-status-thn-'+ id).prop('checked', false);
                        
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                            })

                            Toast.fire({
                            icon: 'warning',
                            title: 'Data batal dikonfirmasi'
                        })
                    }
                }
            })
        }

        function checkAll(idCheckAll, classCheckItem){
            checked = $('#'+ idCheckAll).prop('checked');
            $('.'+ classCheckItem).each(function(){
                this.checked = checked;
            });
        }

        function unCheckAll(element, idCheckAll){
            checked = $(element).prop('checked');
            if(!checked){                        
                $('#'+ idCheckAll).prop('checked', false);
            }
        }

        function hapus_pendaftar(url){
            let check = $('.check-item:checked').map(function(){
                return this.value;
            }).get();
            let length_check = check.length;

            if(length_check > 0){
                Swal.fire({
                    title: 'Apakah anda yakin menghapus ' + length_check + ' data pendaftar ? ',
                    text: "",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Send',
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            type: 'delete',
                            url: url,
                            data: {
                                "_token": "{{ csrf_token() }}",
                                "_method": "delete",
                                "id": check,
                            },
                            success: function(data) {
                                Swal.fire(
                                    'Deleted!',
                                    `${data}`,
                                    'success'
                                ).then(function(){
                                    location.reload();
                                });
                            }
                        })
                    }
                })
            }else{
                Swal.fire(
                    'Harap pilih data pendaftar yang ingin dihapus',
                    '',
                    'warning'
                )
            }
        }
    </script>
@endpush

@section('content')
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
                                <select name="tahun_akademik" id="tahun_akademik" onchange="changeTahun(this.value)">
                                    @foreach ($tahun_akd as $thn)
                                        <option value="{{ $thn->id }}" {{ $thn->status == 1 ? 'selected' : '' }}>{{ $thn->tahun }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                    </table>

                    <div class="table-responsive mb-3">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr class="align-items-center">
                                    <th><input type="checkbox" class="form-check-input" id="check-all" onclick="checkAll('check-all', 'check-item')"></th>
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
                            <tbody id="tbody-pendaftar">
                                {{-- <tr>
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
                                </tr> --}}
                            </tbody>
                        </table>
                    </div>
        
                    <button class="btn btn-danger" onclick="hapus_pendaftar('{{ route('pendaftar.destroy', ['pendaftar' => 1, 'hapus' => 'check-all']) }}')"><i class="bi bi-x-circle-fill"></i> Hapus</button>
                </div>
            </div>
        </div>
    </div>
@endsection