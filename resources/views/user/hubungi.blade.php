@extends('layout.app')

@section('main')
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg pt-110">
        <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Contact</h2>
            <p>Contact Us</p>
        </div>

        <div class="row">

            <div class="col-lg-6">

            <div class="row">
                <div class="col-md-12">
                    <div class="info-box">
                        <i class="bx bx-map"></i>
                        <h3>Our Address</h3>
                        <p>Ray V, Jl. Brigjen H. hasan Basri, Handil Bakti, Kec. Alalak, Kabupaten Barito Kuala, Kalimantan Selatan 70582</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box mt-4">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Us</h3>
                        <p>polihasnur@polihasnur.ac.id<br>Kirimi kami pertanyaan kapan saja!</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box mt-4">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Us</h3>
                        <p>+62 0851 0015 6666<br>Sen s/d Jum | 07.30 - 16.30</p>
                    </div>
                </div>
            </div>

            </div>

            <div class="col-lg-6">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>

        </div>
    </section><!-- End Contact Section -->
@endsection