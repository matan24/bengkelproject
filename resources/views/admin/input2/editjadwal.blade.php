@extends('layout.admin')

@section('title', 'Edit Jadwal Service | Bengkel Mobil')

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
              <h2>UPDATE JADWAL SERVICE</h2>
              <p>Jangan telat ya..service selalu mobil anda, agar tetap aman dan nyaman..!</p>
            </div>
          </div>
        </div>
        
      </section><!-- End Breadcrumbs -->
        
        <!-- ======= Contact Section ======= -->
       <section id="contact" class="contact">
        <div class="container">
           
          <div class="row mt-5">
  
              <form method="post" action="{{ route('admin.input2.editjadwal.update', $jadwal->id )}}">
                @method('patch')
                @csrf
                <br>
                @if (session('status'))
                <div class="alert alert-info">
                  {{ session('status')}}
                </div>
                 @endif
                 <br>
                 <a href="{{ route('admin.input2.show') }}" class="btn btn-info">Kembali</a>
                  <br><br>
                 <td>
                    <div class="form-group">
                      <label for="hari">Pilih hari</label>
                      <select id="hari" name="hari" class="form-control custom-select">
                          <option selected disabled>Pilih</option>
                          <option {{ $jadwal->hari == 'Senin' ? 'selected' : '' }} value="Senin">
                          Senin
                          </option>
                          <option {{ $jadwal->hari == 'Selasa' ? 'selected' : '' }} value="Selasa">
                          Selasa
                          </option>
                          <option {{ $jadwal->hari == 'Rabu' ? 'selected' : '' }} value="Rabu">
                          Rabu
                          </option>
                          <option {{ $jadwal->hari == 'Kamis' ? 'selected' : '' }} value="Kamis">
                          Kamis
                          </option>
                          <option {{ $jadwal->hari == 'Jumat' ? 'selected' : '' }} value="Jumat">
                          Jumat
                          </option>
                          <option {{ $jadwal->hari == 'Sabtu' ? 'selected' : '' }} value="Sabtu">
                          Sabtu
                          </option>
                          <option {{ $jadwal->hari == 'Minggu' ? 'selected' : '' }} value="Minggu">
                          Minggu
                          </option>
                      </select>   
                     </div>
                  </td>

                  <div class="form-group mt-3">
                    <label for="tanggal">Tanggal service</label>
                    <input type="date" class="form-control" name="tanggal" id="tanggal" value="{{ $jadwal->tanggal }}" required>
                  </div>

                  <div class="form-group mt-3">
                    <label for="kuota">Kuota service</label>
                    <input type="text" class="form-control" name="kuota" id="kuota" value="{{ $jadwal->kuota }}" required>
                  </div><br>

                  <td>
                    <div class="form-group">
                      <label for="mekanik">Pilih Mekanik</label>
                      <select id="mekanik" name="mekanik" class="form-control custom-select">
                          <option selected disabled>Pilih</option>
                          <option {{ $jadwal->mekanik == 'Anto' ? 'selected' : '' }} value="Anto">
                          Anto
                          </option>
                          <option {{ $jadwal->mekanik == 'Megi' ? 'selected' : '' }} value="Megi">
                          Megi
                          </option>
                          <option {{ $jadwal->mekanik == 'Kholib' ? 'selected' : '' }} value="Kholib">
                          Kholib
                          </option>
                          <option {{ $jadwal->mekanik == 'Bayu' ? 'selected' : '' }} value="Bayu">
                          Bayu
                          </option>
                          <option {{ $jadwal->mekanik == 'Lainnya' ? 'selected' : '' }} value="Lainnya">
                          Lainnya
                          </option>
                          <option {{ $jadwal->mekanik == 'Ready' ? 'selected' : '' }} value="Ready">
                          Ready
                          </option>
                          <option {{ $jadwal->mekanik == 'Free' ? 'selected' : '' }} value="Free">
                          Free
                          </option>
                          <option {{ $jadwal->mekanik == 'Bekerja' ? 'selected' : '' }} value="Bekerja">
                          Bekerja
                          </option>
                      </select>   
                  </div>
                  </td>

                <br>
                <div class="text"><button type="submit" class="btn btn-dark">Update jadwal</button></div>
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