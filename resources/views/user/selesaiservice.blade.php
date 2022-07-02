@extends('layout.main')

@section('title', 'Data Selesai Service Konsumen | Bengkel Mobil')

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

  
    <br><br><br><br>

      <!-- ======= Work Process Section ======= -->
      <section id="work-process" class="work-process">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>Data Selesai Service Konsumen</h2>
            <p>Sistem kami akan selalu update mengenai informasi jadwal service</p>
          </div>
  
          <table class="table table-striped table-success table-bordered">
            <thead>
                                     
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Konsumen</th>
                <th scope="col">Alamat</th>
                <th scope="col">WhatsApp/Hp</th>
                <th scope="col">Jam Service</th>
                <th scope="col">Tanggal Service</th>
                <th scope="col">No Kendaraan</th>
                <th scope="col">Jenis Service</th>
                <th scope="col">Waktu Pengerjaan</th>
                <th scope="col">Status Service</th>
                <th scope="col">Keterangan Service</th>
                <th scope="col">Jenis Service</th>
                <th scope="col">Waktu Tunggu</th>
                <th scope="col">Waktu Selesai Service</th>
                <th scope="col">TA</th>
              </tr>
            </thead>
            <tbody>
              @php
                $total  = 0;
              @endphp
              @foreach ( $service as $item )
              @php
                $waktu_tunggu = ((strtotime($item->waktu_selesai) - strtotime($item->waktu_tiba)) / 60 - $item->lama_proses);
                $ta= $item->lama_proses + $waktu_tunggu;
                $total += $ta;
              @endphp              
              <tr>                             
              <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->no }}</td>
                <td>{{ $item->waktu_tiba }}</td>
                <td>{{ $item->tanggal }}</td>
                <td>{{ $item->plat }}</td>
                <td>{{ $item->jenis ?? "Kosong" }}</td>
                <td>{{ $item->lama_proses }}</td>                  
                <td>{{ $item->status }}</td>
                <td>{{ $item->keterangan }}</td>
                <td>{{ $item->jenis }}</td>
                <td>{{ $waktu_tunggu }}</td>
                <td>{{ $item->waktu_selesai }}</td>
                <td>{{ $ta }}</td>       
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                {{-- colspan class utk menggabungkan colom --}}
                <td colspan="13"></td>
                <td><b>Jumlah Rata-rata</b></td>
                <td>
                  @if($total > 0 && count($service) > 0 )
                    {{ $total/count($service) }}
                  @else
                  0
                  @endif
                </td>
              </tr>
            </tfoot>
          </table>
  
        </div>
      </section><!-- End Work Process Section -->

    <main id="main">
   
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