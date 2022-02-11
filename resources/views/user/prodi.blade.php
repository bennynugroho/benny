@extends('layout.app')

@section('main')
    <!-- ======= Prodi Section ======= -->
    <section id="prodi" class="about pt-110">
        <div class="container" data-aos="fade-up">

        @foreach ($prodi as $pro)
            <div class="row content">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>Prodi</h2>
                        <p>{{ $pro->nama }}</p>
                    </div>
                    <div class="mb-3">
                        <h5>Visi :</h5>
                        <ul>
                            @foreach ($pro->getVisi as $visi)
                                <li><i class="ri-check-double-line"></i> {{ $visi }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <h5>Misi :</h5>
                    <ul>
                        @foreach ($pro->getMisi as $misi)
                            <li><i class="ri-check-double-line"></i> {{ $misi }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-6 text-end pt-4 pt-lg-0">
                    <img src="{{ asset('assets/img/picture/default_prodi.jpg') }}" class="img-thumbnail" width="450" alt="">
                </div>
            </div>
        </div>
        @endforeach
    </section><!-- End Prodi Section -->
@endsection