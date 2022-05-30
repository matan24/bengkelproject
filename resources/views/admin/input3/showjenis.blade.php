@extends('layout.admin')

@section('title', 'Data Detail Jenis Service | Bengkel Mobil')

@section('container')

<body>


 <!-- ======= Hero Section ======= -->
 <section id="hero">
    <div class="hero-container" data-aos="fade-up"> 
      <h1>Tia Ban Autoservice</h1>
      <h2>Melayani | Service | Ganti Ban</h2>
      <a href="#work-process" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

  
    <br><br><br><br>

      <!-- ======= Work Process Section ======= -->
      <section id="work-process" class="work-process">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>Detail Data Jenis Service</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>
          <a href="{{ route('admin.input2.createjadwal') }}" class="btn btn-info">Kembali</a>
          <br><br>
          <table class="table table-striped table-success table-bordered">
          
            @if (session('status'))
            <div class="alert alert-warning">
              {{ session('status')}}
            </div>
             @endif
            
            <thead>
                           
              <tr>
                <th scope="col">No</th>
                <th scope="col">Jenis Service</th>
                <th scope="col">Durasi Service</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ( $jenis as $item )   
              <tr>                             
              <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->waktu }}</td>
                 <td class="">
                  <a href="{{ route('admin.input3.editjenis', $item->id) }}" class="btn btn-info mb-2"><i class="fa-solid fa-square-pen"></i></a>

                  <form action="{{ route('admin.input3.showjenis.delete', $item->id) }}" method="post">
                     @method('delete')
                     @csrf 
                    <button type="submit" class="btn btn-danger mr-2"><i class="fa-solid fa-trash-arrow-up"></i></button>
                  </form>

                </td>                            
              @endforeach
            </tbody>
     
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