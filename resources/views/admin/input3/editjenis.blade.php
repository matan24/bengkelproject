@extends('layout.admin')

@section('title', 'Update Data Jenis Service | Bengkel Mobil')

@section('container')

    <body>


        <!-- ======= Hero Section ======= -->
        <section id="hero">
            <div class="hero-container" data-aos="fade-up">
                <h1>Tia Ban Autoservice</h1>
                <h2>Melayani | Service | Ganti Ban</h2>
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
            </div>
        </section><!-- End Hero -->

        <main id="main">

            </div>
            </section><!-- End Work Process Section -->

            <main id="main">

                <!-- ======= Breadcrumbs ======= -->
                <section id="breadcrumbs" class="breadcrumbs">
                    <div class="breadcrumb-hero">
                        <div class="container">
                            <div class="breadcrumb-hero">
                                <h2>UPDATE DATA JENIS SERVICE</h2>
                                <p>Jangan telat ya..service selalu mobil anda, agar tetap aman dan nyaman..!</p>
                            </div>
                        </div>
                    </div>

                </section><!-- End Breadcrumbs -->

                <!-- ======= Contact Section ======= -->
                <section id="contact" class="contact">
                    <div class="container">

                        <div class="row mt-5">

                            <div class="col-lg-4" data-aos="fade-right">


                            </div>

                        </div>

                        <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">
                            <a href="{{ route('admin.input3.showjenis') }}" class="btn btn-info">Kembali</a>

                            <form action="{{ route('admin.input3.editjenis.update', $jenis->id) }}" method="post">
                                @method('patch')
                                @csrf
                                <br>
                                @if (session('status'))
                                    <div class="alert alert-info">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <br>

                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="nama">Jenis Service</label>
                                        <input type="text" name="nama" class="form-control" id="nama" value="{{ $jenis->nama }}" required>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="waktu">Waktu Service</label>
                                        <input type="text" name="waktu" class="form-control" id="waktu" value="{{ $jenis->waktu }}" required>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <button type="submit" class="btn btn-dark">Update data</button>
                                </div>
                            </form>

                        </div>

                    </div>

                    </div>
                </section><!-- End Contact Section -->

            </main><!-- End #main -->

              <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
          <div class="container">
            <div class="row">
    
              <div class="col-lg-3 col-md-6 footer-info">
                <h3>Tia Ban Autoservice</h3>
                <p>Tia Ban Autoservice Merupakan sistem informasi pelayanan service mobil dan menyediakan berbagai macam ban yang berkualitas.</p>
              </div>
    
              <div class="col-lg-3 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Jadwal Service</a></li>
                  <li><a href="#">Service Sekarang</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </div>
    
              <div class="col-lg-3 col-md-6 footer-contact">
                <h4>Contact Us</h4>
                <p>
                  Jalan Paus No 50<br>
                  Riau, Sumatera, Indonesia<br>
                  <strong>Phone:</strong> 0823 8775 0547<br>
                  <strong>Email:</strong> tiabanautoservice@gmail.com<br>
                </p>
    
                <div class="social-links">
                  <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                  <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                  <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                  <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
    
              </div>
    
              <div class="col-lg-3 col-md-6 footer-newsletter">
                <h4>Hubungi Kami</h4>
                <p>Kami akan memberikan pelayanan terbaik untuk mobil anda.</p>
              </div>
    
            </div>
          </div>
        </div>
    
        <div class="container">
          <div class="copyright">
            &copy; Copyright <strong><span>Tia Ban Autoservice</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/serenity-bootstrap-corporate-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </footer><!-- End Footer -->

            <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                    class="bi bi-arrow-up-short"></i></a>

            <!-- Vendor JS Files -->
            <script src="assets/vendor/aos/aos.js"></script>
            <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
            <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
            <script src="assets/vendor/php-email-form/validate.js"></script>
            <script src="assets/vendor/purecounter/purecounter.js"></script>
            <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
            <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

            <!-- Template Main JS File -->
            <script src="assets/js/main.js"></script>

    </body>

@endsection
