@extends('layout.main')

@section('title', 'Contact | Bengkel Mobil')

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

 
    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="fade-in">

        <div class="text-center">
          <h3>Kunjungi Kami | Google Maps | Telusuri</h3>
          <a class="cta-btn" href="{{ route('user.service') }}">Ayo Daftar !</a>
        </div>

      </div>
    </section><!-- End Cta Section -->
        <br><br>
      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container">
  
          {{-- <div>
            <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
          </div> --}}

          <div>
            <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.665272054455!2d101.43671871475334!3d0.501853199633864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5a9c0565ae727%3A0x7560e9b9396d85cb!2sTia%20Ban%20Auto%20Servis!5e0!3m2!1sid!2sid!4v1649516044980!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
  
          <div class="row mt-5">
  
            <div class="col-lg-4" data-aos="fade-right">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>Jl. Paus No.50, Wonorejo, Kec. Marpoyan Damai, Kota Pekanbaru, Riau 28124</p>
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
</body>

@endsection