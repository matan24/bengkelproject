@extends('layout.admin')

@section('title', 'Input Jadwal Service | Bengkel Mobil')

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
              <h2>INPUT JADWAL SERVICE</h2>
              <p>Jangan telat ya..service selalu mobil anda, agar tetap aman dan nyaman..!</p>
            </div>
          </div>
        </div>
        
      </section><!-- End Breadcrumbs -->
        
        <!-- ======= Contact Section ======= -->
       <section id="contact" class="contact">
        <div class="container">
           
          <div class="row mt-5">
  
              <form action="{{ route('admin.input2.createjadwal.store') }}" method="post">
                @csrf
                <br>
                @if (session('status'))
                <div class="alert alert-info">
                  {{ session('status')}}
                </div>
                 @endif
                 <br>
                 <a href="{{ route('admin.input2.show') }}" class="btn btn-info">Detail data</a>
                  <br><br>

                 <td>
                    <div class="form-group">
                      <label for="hari">Pilih hari</label>
                      <select id="hari" name="hari" class="form-control custom-select">
                          <option selected disabled>Pilih</option>
                          <option>
                          Senin
                          </option>
                          <option>
                          Selasa
                          </option>
                          <option>
                          Rabu
                          </option>
                          <option>
                          Kamis
                          </option>
                          <option>
                          Jumat
                          </option>
                          <option>
                          Sabtu
                          </option>
                          <option>
                          Minggu
                          </option>
                      </select>   
                  </div>
                </td>
                <br>

                <td>
                  <div class="form-group">
                      <label for="kuotaservice">Pilih Kuota</label>
                      <select id="kuotaservice" name="kuotaservice" class="form-control custom-select">
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
                      </select>
                  </div>
              </td>
                  
                  <div class="form-group mt-3">
                    <label for="waktu">Jam Buka</label>
                    <input type="text" class="form-control" name="waktu" id="waktu" required>
                  </div>

                  <div class="form-group mt-3">
                    <label for="kuota">Kuota Konsumen Service</label>
                    <input type="text" class="form-control" name="kuota" id="kuota" required>
                  </div><br>

                  <td>
                    <div class="form-group">
                      <label for="mekanik">Pilih Mekanik</label>
                      <select id="mekanik" name="mekanik" class="form-control custom-select">
                          <option selected disabled>Pilih</option>
                          <option>
                          Anto
                          </option>
                          <option>
                          Megi
                          </option>
                          <option>
                          Kholib
                          </option>
                          <option>
                          Bayu
                          </option>
                          <option>
                          Lainnya
                          </option>
                          <option>
                          Free
                          </option>
                          <option>
                          Ready
                          </option>
                          <option>
                          Bekerja
                          </option>
                      </select>   
                  </div>
                  </td>

                <br>
                <div class="text"><button type="submit" class="btn btn-dark">Input jadwal</button></div>
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
  
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
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