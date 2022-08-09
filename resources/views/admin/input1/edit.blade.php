@extends('layout.admin')

@section('title', 'Update Data Selesai Konsumen Service | Bengkel Mobil')

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
              <h2>INPUT DATA KONSUMEN SELESAI SERVICE</h2>
              <p>Jangan telat ya..service selalu mobil anda, agar tetap aman dan nyaman..!</p>
            </div>
          </div>
        </div>
        <div class="container">
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
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
                      
                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@example.com</p>
                </div>
  
                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 55s</p>
                </div>
  
              </div>
  
            </div>
  
            <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">
             <a href="{{ route('admin.dataservice') }}" class="btn btn-info">Kembali</a>

              <form method="post" action="{{ route('admin.input1.edit.update', $dataservice->id  )}}">
                @method('patch')
                @csrf

                <br>
                @if (session('status'))
                <div class="alert alert-info">
                  {{ session('status')}}
                </div>
                 @endif
                 <br>
                 
                <div class="row">
                  <div class="col-md-6 form-group">
                    <label for="nama">Nama konsumen</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="{{ $dataservice->nama }}" required>
                  </div>
                  
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $dataservice->alamat }}" required>
                  </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="no">WhatpsApp/HP</label>
                      <input type="text" name="no" class="form-control" id="no" value="{{ $dataservice->no }}" required>
                    </div>
  
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                      <label for="waktu">Waktu service</label>
                      <input type="time" class="form-control" name="waktu" id="waktu" value="{{ $dataservice->waktu }}" required>
                    </div>
                  </div>

                  <div class="form-group mt-3">
                    <label for="tanggal">Tanggal service</label>
                    <input type="date" class="form-control" name="tanggal" id="tanggal" value="{{ $dataservice->tanggal }}" required>
                  </div>

                  <div class="form-group mt-3">
                    <label for="jservice">Kuota Service</label>
                    <input type="text" class="form-control" name="jservice" id="jservice" value="{{ $dataservice->jservice }}" required>
                  </div>
                  
                  <td>
                    <div class="form-group">
                      <label for="status"></label>
                      <select id="status" name="status" class="form-control custom-select">
                          <option selected disabled>Status service</option>
                          <option {{ $dataservice->status == 'Pending' ? 'selected' : '' }} value="Pending">
                          Pending
                          </option>
                          <option {{ $dataservice->status == 'Pengecekan' ? 'selected' : '' }} value="Pengecekan">
                          Pengecekan
                          </option>
                          <option {{ $dataservice->status == 'Dalam pengerjaan' ? 'selected' : '' }} value="Dalam pengerjaan">
                          Dalam pengerjaan
                          </option>
                          <option {{ $dataservice->status == 'Selesai service' ? 'selected' : '' }} value="Selesai service">
                          Selesai service
                          </option>
                      </select>   
                  </div>
                  </td>
                  
                  <td>
                    <div class="form-group">
                      <label for="keterangan"></label>
                      <select id="keterangan" name="keterangan" class="form-control custom-select">
                          <option selected disabled>Keterangan Service</option>
                          <option {{ $dataservice->keterangan == 'Sudah bisa dijemput' ? 'selected' : '' }} value="Sudah bisa dijemput">
                          Sudah bisa dijemput
                          </option>
                          <option {{ $dataservice->keterangan == 'Masih pengerjaan' ? 'selected' : '' }} value="Masih pengerjaan">
                          Masih pengerjaan
                          </option>
                          <option {{ $dataservice->keterangan == 'Sebentar lagi selesai' ? 'selected' : '' }} value="Sebentar lagi selesai">
                          Sebentar lagi selesai
                          </option>
                      </select>   
                  </div>
                  </td>  

                <br>
                <div class="text"><button type="submit" class="btn btn-dark">Update data</button></div>
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
              <h3>Serenity</h3>
              <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
            </div>
  
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Terms of service</a></li>
                <li><a href="#">Privacy policy</a></li>
              </ul>
            </div>
  
            <div class="col-lg-3 col-md-6 footer-contact">
              <h4>Contact Us</h4>
              <p>
                A108 Adam Street <br>
                New York, NY 535022<br>
                United States <br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
  
              <div class="social-links">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
              </div>
  
            </div>
  
            <div class="col-lg-3 col-md-6 footer-newsletter">
              <h4>Our Newsletter</h4>
              <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem marada parida nodela caramase seza.</p>
              <form action="" method="post">
                <input type="email" name="email"><input type="submit" value="Subscribe">
              </form>
            </div>
  
          </div>
        </div>
      </div>
  
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Serenity</span></strong>. All Rights Reserved
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