@extends('layout.app')

@section('main')
    <!-- ======= About Section ======= -->
    <section id="alur" class="about pb-0 pt-110">
        <div class="container" data-aos="fade-up">
            <div class="section-title pb-3">
                <h2>Pengumuman</h2>
                <p>Pengumuman Seleksi</p>
            </div>
        </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center no-gutters">
                @if ($pengumuman->count() >0)
                    <div class="col-md-10">
                        <p>Berikut adalah nama-nama calon mahasiswa yang lolos seleksi:</p>
                        <table class="table table-striped table-responsive">
                            <thead>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Nomor Pendaftaran</th>
                                <th>Asal Sekolah</th>
                            </thead>
                            <tbody>
                                @foreach ($pengumuman as $p)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $p->daftar->nama }}</td>
                                        <td>{{ $p->no_pendaftaran }}</td>
                                        <td>{{ $p->daftar->slta }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="col-md-8">
                        <div class="alert alert-primary d-flex align-items-center justify-content-center" role="alert">
                            <h5 class="mb-0"><i class="bi bi-info-circle me-3"></i> Pengumuman Seleksi belum Ada</h5>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section><!-- End Counts Section -->
@endsection