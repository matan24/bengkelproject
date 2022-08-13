@extends('layout.main')

@section('title', 'Service | Bengkel Mobil')

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
                                <h2>DAFTAR SERVICE </h2>
                                <p>Jangan telat ya..service selalu mobil anda, agar tetap aman dan nyaman..!</p>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <ol>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="{{ route('user.konsumenservice') }}">Data service konsumen</a></li>
                            <li><a href="index.html">Waktu service</a></li>
                        </ol>
                    </div>
                </section><!-- End Breadcrumbs -->

                <!-- ======= Contact Section ======= -->
                <section id="contact" class="contact">
                    <div class="container">

                        <div class="row mt-5">

                            <div class="col-lg-4" data-aos="fade-right">
                                <div class="info">
                                    <div class="address">
                                        <i class="bi bi-geo-alt"></i>
                                        <h4>Location:</h4>
                                        <p>Jalan Paus No 50 Riau, Sumatera, Indonesia</p>
                                    </div>

                                    <div class="email">
                                        <i class="bi bi-envelope"></i>
                                        <h4>Email:</h4>
                                        <p>tiabanautoservice@gmail.com</p>
                                    </div>

                                    <div class="phone">
                                        <i class="bi bi-phone"></i>
                                        <h4>Call:</h4>
                                        <p>0823 8775 0547</p>
                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

                                <form action="{{ route('user.service.store') }}" method="post">
                                    @csrf

                                    <br>
                                    @if (session('status'))
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <br>

                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="nama">Nama konsumen</label>
                                            <input type="text" name="nama" class="form-control" id="nama" required>
                                        </div>

                                        <div class="col-md-6 form-group mt-3 mt-md-0">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" class="form-control" name="alamat" id="alamat" required>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="no">WhatpsApp/HP</label>
                                            <input type="text" name="no" class="form-control" id="no" required>
                                        </div>

                                        <div class="col-md-6 form-group mt-3 mt-md-0">
                                            <label for="waktu">Waktu service</label>
                                            <input type="time" class="form-control" name="waktu" id="waktu" required>
                                        </div>
                                    </div>

                                    <div class="form-group mt-3">
                                        <label for="tanggal">Tanggal</label>
                                        <input type="date" class="form-control" name="tanggal" id="tanggal" required>
                                    </div>
                                    <br>

                                    <td>
                                      <div class="form-group">
                                          <label for="jservice">Kuota Service</label>
                                          <select id="jservice" name="jservice" class="form-control custom-select">
                                              <option selected disabled>Pilih</option>
                                              <option>
                                                08:00 - kuota tersedia: 4
                                              </option>
                                              <option>
                                                09:00 - kuota tersedia: 4
                                              </option>
                                              <option>
                                                10:00 - kuota tersedia: 3
                                              </option>
                                              <option>
                                                11:00 - kuota tersedia: 2
                                              </option>
                                              <option>
                                                13:00 - kuota tersedia: 4
                                              </option>
                                              <option>
                                                14:00 - kuota tersedia: 3
                                              </option>
                                              <option>
                                                15:00 - kuota tersedia: 3
                                              </option>
                                              <option>
                                                16:00 - kuota tersedia: 2
                                              </option>
                                              <option>
                                                17:00 - kuota tersedia: 2
                                              </option>
                                              <option>
                                                Selanjutnya/besok
                                              </option>

                                          </select>
                                      </div>
                                  </td>
                                   
                                    <div class="form-group mt-3">
                                      <label for="plat">Nomor Kendaraan</label>
                                      <input type="text" class="form-control" name="plat" id="plat" required>
                                    </div>

                                    <td>
                                        <div class="form-group">
                                            <label for="id_jenis"></label>
                                            <select id="id_jenis" name="id_jenis" class="form-control custom-select">
                                                <option selected disabled>Pilih jenis service</option>
                                                @foreach ($jenis as $item)
                                                    <option value= '{{ $item->id }}'>
                                                        {{ $item->nama }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </td>
                                    {{-- <br>

                                    <td>
                                      <div class="form-group">
                                          <label for="jservice">Jenis Service & Biaya</label>
                                          <select id="jservice" name="jservice" class="form-control custom-select">
                                              <option selected disabled>Pilih</option>
                                              <option>
                                                Ganti oli Rp.200.000
                                              </option>
                                              <option>
                                                Service berkala Rp.300.000
                                              </option>
                                              <option>
                                                Service bumper Rp.400.000
                                              </option>
                                              <option>
                                                Tune-up Rp.10.000.000
                                              </option>
                                              <option>
                                                Service jok mobil Rp.400.000
                                              </option>
                                              <option>
                                                Ganti ban Rp.800.000
                                              </option>
                                              <option>
                                                Repaint full body Rp.5.000.000
                                              </option>
                                          </select>
                                      </div>
                                  </td> --}}

                                    <div class="form-group mt-3">
                                        <label for="kendala">Kendala mobil</label>
                                        <textarea class="form-control" name="kendala" id="kendala" rows="5"
                                          placeholder="Jelaskan dengan detail kendala pada mobil anda"
                                          required></textarea>
                                    </div>
                                    <br>
                                    <div class="text"><button type="submit" class="btn btn-dark">Daftar
                                            sekarang</button></div>
                                </form>

                            </div>

                        </div>

                    </div>
                </section><!-- End Contact Section -->



    <!-- ======= Services Section ======= -->
    <section id="services" class="services ">
        <div class="container">
  
          <div class="section-title pt-5" data-aos="fade-up">
            <h2>Our Services</h2>
          </div>
  
          <div class="row">
            <div class="col-md-6">
              <div class="icon-box" data-aos="fade-up">
                <div class="icon"><i class="bi bi-briefcase" style="color: #ff689b;"></i></div>
                <h4 class="title"><a href="">Cepat dan tepat</a></h4>
                <p class="description">Kami mempunyai sistem yang mana anda bisa boking service dimana pun anda berada</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="icon-box" data-aos="fade-up">
                <div class="icon"><i class="bi bi-book" style="color: #e9bf06;"></i></div>
                <h4 class="title"><a href="">Percayakan pada kami</a></h4>
                <p class="description"> Kami mempunyai keamanan sistem yang aman dan cerdas</p>
              </div>
            </div>
  
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-card-checklist" style="color: #3fcdc7;"></i></div>
                <h4 class="title"><a href="">Big data</a></h4>
                <p class="description">Anda bisa melihat informasi terkait jadwal service dan lainnya</p>
              </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-binoculars" style="color:#41cf2e;"></i></div>
                <h4 class="title"><a href="">Sistem mudah dan elegan</a></h4>
                <p class="description">Anda sangat terbantu dalam melakukan pendaftaran service</p>
              </div>
            </div>
  
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-globe" style="color: #d6ff22;"></i></div>
                <h4 class="title"><a href="">Mekanik terpercaya</a></h4>
                <p class="description">Kami mempunyai mekanik yang handal dan ahli</p>
              </div>
            </div>
            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                <div class="icon"><i class="bi bi-clock" style="color: #4680ff;"></i></div>
                <h4 class="title"><a href="">Efektif</a></h4>
                <p class="description">Jam kerja yang efisien dan tepat waktu</p>
              </div>
            </div>
          </div>
  
        </div>
      </section><!-- End Services Section -->

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
