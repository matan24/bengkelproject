@extends('layout.admin')

@section('title', 'Konsumen Selesai Service | Bengkel Mobil')

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
                <th scope="col">Waktu Pengerjaan</th>
                <th scope="col">Status Service</th>
                <th scope="col">Keterangan Service</th>
                <th scope="col">Waktu Selesai Service</th>
                <th scope="col">TA</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @php
                $total  = 0;
              @endphp
              @foreach ( $service as $item )
              @php
                $total += $item->lama_proses;
              @endphp            
              <tr>                             
              <th scope="row">{{ $loop->iteration }}</th>
                <td name="nama">{{ $item->nama }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->no }}</td>
                <td>{{ $item->waktu }}</td>
                <td>{{ $item->tanggal }}</td>
                <td>{{ $item->plat }}</td>
                <td>{{ $item->lama_proses }}</td>                  
                <td name="status">{{ $item->status }}</td>
                <td name="keterangan">{{ $item->keterangan }}</td>
                <td>{{ $item->jam ?? "-" }}</td> 
                <td>{{ $item->lama_proses }}</td>      
                <td>
                    <button type="button" name="editButton" class="btn btn-success" data-toggle="modal" data-target="#editModal" data-id="{{ $item->id }}"><i class="fa-solid fa-pen-to-square"></i></button>

                    <form action="{{ route('admin.input1.createkonsumen.delete', $item->id) }}" method="post">
                      @method('delete')
                      @csrf 
                      <button type="submit" class="btn btn-danger mr-2"><i class="bi bi-trash2-fill"></i></button>
                    </form>


                </td>  
              @endforeach
            </tbody>
            <tfoot>
              <tr>
                {{-- colspan class utk menggabungkan colom --}}
                <td colspan="11"></td>
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
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li><a href="{{ route('admin.dataservice') }}">Data service konsumen</a></li>
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
  
              <form action="{{ route('admin.input1.edit.update') }}" method="post">
                @csrf

                <br>
                @if (session('status'))
                <div class="alert alert-info">
                  {{ session('status')}}
                </div>
                 @endif
                 <br>
                  
                  <td>
                    <h4 name="nama"></h4>
                    <input type="hidden" name="id">
                  </td>
                  <td>
                    <div class="form-group">
                      <label for="status"></label>
                      <select id="status" name="status" class="form-control custom-select">
                          <option selected disabled>Status service</option>
                          <option value="Terdaftar">
                          Terdaftar
                          </option>
                          <option value="Pending">
                            Pending
                          </option>
                          <option value="Pengecekan">
                          Pengecekan
                          </option>
                          <option value="Dalam pengerjaan">
                          Dalam pengerjaan
                          </option>
                          <option value="Selesai service">
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
                          <option value="Menunggu di proses">
                            Menunggu di proses
                          </option>
                          <option value="Sudah bisa dijemput">
                            Sudah bisa dijemput
                            </option>
                          <option value="Masih pengerjaan">
                          Masih pengerjaan
                          </option>
                          <option value="Sebentar lagi selesai">
                          Sebentar lagi selesai
                          </option>
                      </select>   
                  </div>
                  </td>

                  <div class="form-group mt-3">
                    <label for="jam">Waktu Selesai Service</label>
                    <input type="time" class="form-control" name="jam" id="jam">
                  </div>

                <br>
                <div class="text"><button type="submit" class="btn btn-dark">Simpan</button></div>
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
  
    @push('script')
    <script src="{{ asset('how/assets/js/jquery-3.6.0.js') }}"></script>
        <script>
          $(function(){
              let buttonEdit = $("button[name*='editButton']")
              let editModal = $("div#editModal")


              buttonEdit.on("click",function(){
                let id = $(this).attr('data-id');
                let row = $(this).closest("tr");
                let nama = row.find("td[name*='nama']").html();
                let status = row.find("td[name*='status']").html();
                let keterangan = row.find("td[name*='keterangan']").html();
              
                $(`select[name*='status']`).val(status);
                $(`select[name*='keterangan']`).val(keterangan);
                $(`input[name*='id']`).val(id);
                $(`h4[name*='nama']`).html(nama);
              });
          })
        </script>
    @endpush
  
  </body>

@endsection