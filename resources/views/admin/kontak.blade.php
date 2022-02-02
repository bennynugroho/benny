@extends('layout.admin')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card my-3">
                <div class="card-body">
                    <h3>Data Kontak</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <button class="btn btn-success"><i class="bi bi-pencil-square"></i> Ubah</button>

                    <div class="table-responsive my-3">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Facebook</td>
                                    <td>:</td>
                                    <td><a href="{{ $kontak->facebook }}">{{ $kontak->facebook }}</a></td>
                                </tr>
                                <tr>
                                    <td>Twitter</td>
                                    <td>:</td>
                                    <td><a href="{{ $kontak->twitter }}">{{ $kontak->twitter }}</a></td>
                                </tr>
                                <tr>
                                    <td>Instagram</td>
                                    <td>:</td>
                                    <td><a href="{{ $kontak->instagram }}">{{ $kontak->instagram }}</a></td>
                                </tr>
                                <tr>
                                    <td>Youtube</td>
                                    <td>:</td>
                                    <td><a href="{{ $kontak->youtube }}">{{ $kontak->youtube }}</a></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td><a href="{{ $kontak->email }}">{{ $kontak->email }}</a></td>
                                </tr>
                                <tr>
                                    <td>Telepon</td>
                                    <td>:</td>
                                    <td>{{ $kontak->telepon }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection