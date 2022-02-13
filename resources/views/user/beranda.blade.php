@extends('layout.app')

@section('hero')
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
        
            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
        
            <div class="carousel-inner" role="listbox">
        
                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
                    <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">STAIRS TO THE FUTURE</h2>
                        <p class="animate__animated animate__fadeInUp">Keunggulan Politeknik Hasnur dari perguruan tinggi vokasi lainnya:</p>
                        <ul class="animate__animated animate__fadeInUp text-white">
                            <li>Akses langsung dan didukung penuh oleh jaringan usaha naungan Hasnur Group (HG).</li>
                            <li>On The Job Training (OJT) di perusahaan jaringan HG dan perusahaan terkemuka lainnya.</li>
                            <li>Beasiswa dari Yayasan Hasnur Centre (YHC), mitra industri, dan pemerintah.</li>
                        </ul>
                        <a href="{{ route('pendaftaran.index') }}" class="btn-app-secondary animate__animated animate__fadeInUp scrollto">Alur Pendaftaran</a>
                        <a href="{{ $formulir->getPath }}" target="_blank" class="btn-get-started animate__animated animate__fadeInUp scrollto"><i class="bi bi-download"></i> Download Formulir</a>
                    </div>
                    </div>
                </div>
        
                {{-- <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
                    <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
                        <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                    </div>
                    </div>
                </div>
        
                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
                    <div class="carousel-container">
                    <div class="container">
                        <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                        <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                        <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
                    </div>
                    </div>
                </div> --}}
        
            </div>
        
            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>
        
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>
        
        </div>
    </section>
@endsection

@section('main')
    <main id="main">

        <!-- ======= Ormawa Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
    
                <div class="section-title">
                    <h2>Oramawa</h2>
                    <p>Organisasi Kemahasiswaan</p>
                </div>
    
                <div class="row content">
                    <div class="col">
                        <p>
                            Polihasnur menyediakan, menaungi, dan mendukung setiap kegiatan pengembangan diri mahasiswa melalui Organisasi BEM, UKM, dan HIMA.
                        </p>
                    </div>
                </div>

                <div class="testimonials mt-5">
                    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">
        
                            <div class="swiper-slide">
                                <div class="testimonial-wrap">
                                    <div class="testimonial-item">
                                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                        <h3>Hima To Polihasnur</h3>
                                        <h4>Anggota Aktif 30 orang</h4>
                                        <p>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore qui nulla voluptatum illo! Asperiores officia culpa hic rem cumque debitis!                                        
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->
                            <div class="swiper-slide">
                                <div class="testimonial-wrap">
                                    <div class="testimonial-item">
                                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                        <h3>Hima To Polihasnur</h3>
                                        <h4>Anggota Aktif 30 orang</h4>
                                        <p>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore qui nulla voluptatum illo! Asperiores officia culpa hic rem cumque debitis!                                        
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->
                            <div class="swiper-slide">
                                <div class="testimonial-wrap">
                                    <div class="testimonial-item">
                                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                        <h3>Hima To Polihasnur</h3>
                                        <h4>Anggota Aktif 30 orang</h4>
                                        <p>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore qui nulla voluptatum illo! Asperiores officia culpa hic rem cumque debitis!                                        
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->
                            <div class="swiper-slide">
                                <div class="testimonial-wrap">
                                    <div class="testimonial-item">
                                        <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                        <h3>Hima To Polihasnur</h3>
                                        <h4>Anggota Aktif 30 orang</h4>
                                        <p>
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore qui nulla voluptatum illo! Asperiores officia culpa hic rem cumque debitis!                                        
                                        </p>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->
        
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
    
            </div>
        </section><!-- End Ormawa Section -->

        <!-- ======= Alur Section ======= -->
        <section id="why-us" class="why-us section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-title pt-5">
                    <h2>Alur</h2>
                    <p>Pendaftaran</p>
                </div>
    
                <div class="row">
    
                <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("assets/img/why-us.jpg");' data-aos="zoom-in" data-aos-delay="100">
                    <a href="https://www.youtube.com/watch?v=h1gtIxBTID4" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                </div>
    
                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">
    
                    <div class="content">
                        <h3>Alur Pendaftaran <strong>Politeknik Hasnur</strong></h3>
                    </div>
    
                    <div class="accordion-list">
                    <ul>
                        <li>
                        <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Melengkapi Berkas → ({{ $info_daftar->getTanggalAwal }} - {{ $info_daftar->getTanggalAkhir }}) <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                            @foreach ($syarat as $syr)
                                <p>- {{ $syr->syarat }}</p>
                            @endforeach
                        </div>
                        </li>
    
                        <li>
                        <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Mengikuti Ujian Masuk → ({{ $info_daftar->getTanggalAwal }} - {{ $info_daftar->getTanggalAkhir }}) <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                            <p>
                                Seluruh calon mahasiswa wajib mengikuti ujian masuk pada tanggal yang telah ditentukan dengan membawa serta kartu ujian.
                            </p>
                        </div>
                        </li>
    
                        <li>
                        <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Daftar Ulang → ({{ $info_daftar->getTanggalAwal }} - {{ $info_daftar->getTanggalAkhir }}) <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                        <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                            <p>
                                Mahasiswa membayarkan uang pangkal melalui Rekening Politeknik Hasnur Bank {{ $info_daftar->bank }} {{ $info_daftar->rekening }} atau dibayarkan langsung di Kampus Polihasnur.
                            </p>
                        </div>
                        </li>
    
                    </ul>
                    </div>
    
                </div>
    
                </div>
    
            </div>
        </section><!-- End Alur Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">
    
                <div class="section-title">
                <h2>Testimonials</h2>
                <p>Testimonials</p>
                </div>
    
                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">
    
                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                    <h3>Ainun Qomariah</h3>
                                    <h4>Alumni Politeknik Hasnur</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Rekomendasi tempat kuliah nya anak Teknik banget! Bertemu dosen dan staff yang sangat bersahabat, ilmu yang diberikan sangat bermanfaat.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                    <h3>Rizqa Fakhrun Nazir</h3>
                                    <h4>Alumni Politeknik Hasnur</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        setelah lulus dari kampus alhamdulilah langsung mendapatkan pekerjaaan dipoliteknik hasnur, pokoknya kuliah disini tidak akan mengecewakan langsung diterima kerja
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                    <h3>Hatniah</h3>
                                    <h4>Alumni Politeknik Hasnur</h4>
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Selamat kepada seluruh alumni politeknik hasnur yang sudah 100% bekerja  semoga sukses selalu
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->
    
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
    
            </div>
        </section>
        <!-- End Testimonials Section -->

    </main>
@endsection