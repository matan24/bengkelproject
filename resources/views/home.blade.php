@extends('layout.admin')

@section('title', 'Home Admin | Bengkel Mobil')

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

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row justify-content-end">
          <div class="col-lg-11">
            <div class="row justify-content-end">

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box py-5">
                  <i class="bi bi-emoji-smile"></i>
                  <span data-purecounter-start="0" data-purecounter-end="65" class="purecounter">0</span>
                  <p>Happy Clients</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box py-5">
                  <i class="bi bi-journal-richtext"></i>
                  <span data-purecounter-start="0" data-purecounter-end="85" class="purecounter">0</span>
                  <p>Projects</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box pb-5 pt-0 pt-lg-5">
                  <i class="bi bi-clock"></i>
                  <span data-purecounter-start="0" data-purecounter-end="27" class="purecounter">0</span>
                  <p>Years of experience</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                <div class="count-box pb-5 pt-0 pt-lg-5">
                  <i class="bi bi-award"></i>
                  <span data-purecounter-start="0" data-purecounter-end="22" class="purecounter">0</span>
                  <p>Awards</p>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="row">

          <div class="col-lg-6 video-box align-self-baseline position-relative">
            <img src="{{ asset('how/assets/img/tia.png') }}" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
          </div>

          <div class="col-lg-6 pt-3 pt-lg-0 content">
            <h3>TIA BAN AUTO SERVICE</h3>
            <p class="font-italic">
              Tia Ban Auto Service adalah bengkel umum yang melayani perbaikan mobil terkait ban, oli, dan servis mesin 
              lainnya serta penjualan spare part mobil. Servis yang diberikan menggunakan peralatan dengan standar 
              Agen Tunggal Pemegang Merek (ATPM). 
            </p>
            <h3>VISI MISI</h3>
            <ul>
              <li><i class="bx bx-check-double"></i>Menjadi bengkel mobil terbaik, terpercaya yang mengutamakan pada kepuasan pelanggan untuk melakukan perbaikan dan perawatan mobil.</li>
              <li><i class="bx bx-check-double"></i>1. Memberikan layanan mobil sehat yang cepat dan berkualitas.</li>
              <li><i class="bx bx-check-double"></i>2. Membangun hubungan saling menguntungkan dengan mitra bisnis.</li>
              <li><i class="bx bx-check-double"></i>3. Menciptakan interaksi kerja yang saling medukung & lingkungan kerja yang kondusif.</li>
              <li><i class="bx bx-check-double"></i>4. Meberikan jasa bengkel yang unggul.</li>
              <li><i class="bx bx-check-double"></i>5. Memberikan solusi tepat & cepat mulai dari saat pelanggan ingin memperbaiki mobil, proses menunggu sampai dengan mobil selesai diperbaiki.</li>
            </ul>
            <p>
       
            </p>
          </div>

        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="fade-in">

        <div class="text-center">
          <h3>Cari Ban | Service ?</h3>
          <p> Kami menyediakan ban yang berkualitas dan nyaman pokoknya</p>
          <p> Kami menyediakan layanan ganti oli dan service untuk mobil anda</p>
          <a class="cta-btn" href="{{ route('user.service') }}">Ayo Daftar !</a>
        </div>

      </div>
    </section><!-- End Cta Section -->

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

      <!-- ======= Our Skills Section ======= -->
      <section id="skills" class="skills section-bg">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>Layanan terbaik</h2>
            <p>Kami melayani konsumen dengan baik dan teliti dalam pengerjaan mobil anda, dan kami akan memberikan layanan
              semaksimal mungkin dalam mengatasi masalah pada kendaraan anda.
            </p>
          </div>
  
          <div class="row">
            <div class="col-lg-6" data-aos="fade-right">
              <img src="{{ asset('how/assets/img/r.jpg') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
              <h3>Tingkat kepuasan konsumen</h3>
              <p class="font-italic">
                Berikut statistik konsumen terhadap TIA BAN | SERVICE 
              </p>
              <p>
                Beberapa point penilain konsumen kepada kami terhadap pelayan service dan ganti ban
              </p>
  
              <div class="skills-content">
  
                <div class="progress">
                  <span class="skill">Kepuasan konsumen<i class="val">100%</i></span>
                  <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
  
                <div class="progress">
                  <span class="skill">Kerapian kinerja<i class="val">90%</i></span>
                  <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
  
                <div class="progress">
                  <span class="skill">Kualitas produk<i class="val">75%</i></span>
                  <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
  
                <div class="progress">
                  <span class="skill">Keahlian mekanik<i class="val">55%</i></span>
                  <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>

                
                <div class="progress">
                  <span class="skill">Kebersihan<i class="val">55%</i></span>
                  <div class="progress-bar-wrap">
                    <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
  
              </div>
  
            </div>
          </div>
  
        </div>
      </section><!-- End Our Skills Section -->

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