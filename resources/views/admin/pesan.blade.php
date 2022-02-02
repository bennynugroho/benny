@extends('layout.admin')

@section('content')
    <div class="row">
        <div class="card my-3">
            <div class="card-body">
                <h3>Data Pesan Masuk</h3>
            </div>
        </div>

        <div class="card my-3">
            <div class="card-body">
                <div class="table-responsive py-3">
                    <table id="table-pesan" class="table table-hover table-striped py-3">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Pesan</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pesan as $p => $pes)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $pes->nama }}</td>
                                    <td>{{ $pes->email }}</td>
                                    <td>{{ $pes->subyek }}</td>
                                    <td>{{ $pes->pesan }}</td>
                                    <td>{{ $pes->tgl_pesan }}</td>
                                    <td class="text-nowrap">
                                        <button class="btn btn-danger btn-sm"><i class="bi bi-x"></i></button>
                                        <button class="btn btn-primary btn-sm"><i class="bi bi-arrow-return-left"></i></button>
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
        $('#table-pesan').DataTable();
    });
</script>

    {{-- <script>
        $(document).ready(function(){
            $('#table-pesan').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('get.pesan') }}",
                columns: [
                    {
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    },
                    },
                    {
                    data: 'nama'
                    },
                    {
                    data: 'email'
                    },
                    {
                    data: 'subyek'
                    },
                    {
                    data: 'pesan'
                    },
                    {
                    data: 'tgl_pesan'
                    },
                    {
                    "render": function ( data, type, row ) {
                        let html = '<button class="btn btn-danger btn-sm"><i class="bi bi-x"></i></button>';
                            html += '<button class="btn btn-primary btn-sm"><i class="bi bi-arrow-return-left"></i></button>';
                        return html;
                    }
                    }
                ],
            });
        });
    </script> --}}
@endpush