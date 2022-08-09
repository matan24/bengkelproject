@extends('layout.admin')

@section('title', 'Update Laporan Mekanik | Bengkel Mobil')

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
                                <h2>Update Laporan Mekanik</h2>
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
                            <a href="{{ route('admin.input4.showlm') }}" class="btn btn-info">Kembali</a>

                            <form method="post" action="{{ route('admin.input4.editlm.update', $mekanik->id) }}">
                                @method('patch')
                                @csrf
                                <br>
                                @if (session('status'))
                                    <div class="alert alert-info">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <br>

                                <td>
                                    <div class="form-group">
                                      <label for="day">Pilih Hari</label>
                                      <select id="day" name="day" class="form-control custom-select">
                                          <option selected disabled>Pilih</option>
                                          <option {{ $mekanik->day == 'Senin' ? 'selected' : '' }} value="Senin">
                                            Senin
                                          </option>
                                          <option {{ $mekanik->day == 'Selasa' ? 'selected' : '' }} value="Selasa">
                                            Selasa
                                          </option>
                                          <option {{ $mekanik->day == 'Rabu' ? 'selected' : '' }} value="Rabu">
                                            Rabu
                                          </option>
                                          <option {{ $mekanik->day == 'Kamis' ? 'selected' : '' }} value="Kamis">
                                            Kamis
                                          </option>
                                          <option {{ $mekanik->day == 'Jumat' ? 'selected' : '' }} value="Jumat">
                                            Jumat
                                          </option>
                                          <option {{ $mekanik->day == 'Sabtu' ? 'selected' : '' }} value="Sabtu">
                                            Sabtu
                                          </option>
                                          <option {{ $mekanik->day == 'Minggu' ? 'selected' : '' }} value="Minggu">
                                            Minggu
                                          </option>
                                      </select>   
                                  </div>
                                  </td>
                
                                  <div class="form-group mt-3">
                                    <label for="jmlkonsumen">Jumlah Konsumen</label>
                                    <input type="text" class="form-control" name="jmlkonsumen" id="jmlkonsumen" value="{{ $mekanik->jmlkonsumen }}" required>
                                  </div>
                
                                  <div class="form-group mt-3">
                                    <label for="jservice">Jenis Service Konsumen</label>
                                    <input type="text" class="form-control" name="jservice" id="jservice" value="{{ $mekanik->jservice }}" required>
                                  </div>
                                  <br>
                
                                  <td>
                                    <div class="form-group">
                                      <label for="jkerusakan">Jenis Kerusakan</label>
                                      <select id="jkerusakan" name="jkerusakan" class="form-control custom-select">
                                          <option selected disabled>Pilih</option>
                                          <option {{ $mekanik->jkerusakan == 'Ganti Oli' ? 'selected' : '' }} value="Ganti Oli">
                                            Ganti Oli
                                          </option>
                                          <option {{ $mekanik->jkerusakan == 'Ganti Oli, Service Bumper' ? 'selected' : '' }} value="Ganti Oli, Service Bumper">
                                            Ganti Oli, Service Bumper
                                          </option>
                                          <option {{ $mekanik->jkerusakan == 'Ganti Oli, Service Bumper, Ganti Ban' ? 'selected' : '' }} value="Ganti Oli, Service Bumper, Ganti Ban">
                                            Ganti Oli, Service Bumper, Ganti Ban
                                          </option>
                                          <option {{ $mekanik->jkerusakan == 'Ganti Ban, Ganti Oli' ? 'selected' : '' }} value="Ganti Ban, Ganti Oli">
                                            Ganti Ban, Ganti Oli
                                          </option>
                                          <option {{ $mekanik->jkerusakan == 'Service Mesin, Ganti Oli, Dll' ? 'selected' : '' }} value="Service Mesin, Ganti Oli, Dll">
                                            Service Mesin, Ganti Oli, Dll
                                          </option>
                                      </select>   
                                  </div>
                                  </td>
                
                                  <div class="form-group mt-3">
                                    <label for="tukangmekanik">Mekanik</label>
                                    <input type="text" class="form-control" name="tukangmekanik" id="tukangmekanik" value="{{ $mekanik->tukangmekanik }}" required>
                                  </div>
                                  <br>

                                  <td>
                                    <div class="form-group">
                                      <label for="status">Status Service</label>
                                      <select id="status" name="status" class="form-control custom-select">
                                          <option selected disabled>Pilih</option>
                                          <option {{ $mekanik->status == 'Selesai' ? 'selected' : '' }} value="Selesai">
                                            Selesai
                                          </option>
                                          <option {{ $mekanik->status == 'Dalam Pengerjaan' ? 'selected' : '' }} value="Dalam Pengerjaan">
                                            Dalam Pengerjaan
                                          </option>
                                          <option {{ $mekanik->status == 'Menunggu Dikerjakan' ? 'selected' : '' }} value="Menunggu Dikerjakan">
                                            Menunggu Dikerjakan
                                          </option>
                                          <option {{ $mekanik->status == 'Rusak Berat' ? 'selected' : '' }} value="Rusak Berat">
                                            Rusak Berat
                                          </option>
                                          <option {{ $mekanik->status == 'Rusak Ringan' ? 'selected' : '' }} value="Rusak Ringan">
                                            Rusak Ringan
                                          </option>
                                          <option {{ $mekanik->status == 'Sudah Bisa Dijemput' ? 'selected' : '' }} value="Sudah Bisa Dijemput">
                                            Sudah Bisa Dijemput
                                          </option>
                                          <option {{ $mekanik->status == 'Sebentar Lagi Selesai' ? 'selected' : '' }} value="Sebentar Lagi Selesai">
                                            Sebentar Lagi Selesai
                                          </option>
                                      </select>   
                                  </div>
                                  </td>

                                <div class="mt-4">
                                    <button type="submit" class="btn btn-dark">Update Laporan</button>
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
