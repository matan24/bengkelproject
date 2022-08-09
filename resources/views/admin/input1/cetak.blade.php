       
          <h1 align="center"><u>Tia Ban Autoservice</u></h1>
          <h3 align="center">Laporan Service</h3>
          <table class="static" align="center" rules="all" border="1px" style="width: 95%">   
            <thead>
                                     
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Konsumen</th>
                <th scope="col">Alamat</th>
                <th scope="col">WhatsApp/Hp</th>
                <th scope="col">Jam Service</th>
                <th scope="col">Tanggal Service</th>
                <th scope="col">Kuota Service</th>
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
                <td>{{ $item->jservice }}</td>
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
          <br>
          <div>
            <h5><b>Pekanbaru</b></h5>
          </div>
          <div>
            <h5><b>Kepala Bengkel</b></h5>
          </div>
          <br>
          <div>
            <h5><b><u>...........................</u></b></h5>
          </div>
