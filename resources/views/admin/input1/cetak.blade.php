       
          <h1 align="center">Cetak Data Konsumen Service</h1>
          <table class="static" align="center" rules="all" border="1px" style="width: 95%">   
            <thead>
                                     
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Konsumen</th>
                <th scope="col">Alamat</th>
                <th scope="col">WhatsApp/No HP</th>
                <th scope="col">Jam Service</th>
                <th scope="col">Waktu Service</th>
                <th scope="col">Tanggal Service</th>
                <th scope="col">Keluhan</th>  
                <th scope="col">Jenis Service</th>
              </tr>
            </thead>
            <tbody>
              @foreach ( $service as $item )   
              <tr>                             
              <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->no }}</td>
                <td>{{ $item->waktu }}</td>
                <td>{{ $item->lama_proses }}</td>
                <td>{{ $item->tanggal }}</td>
                <td>{{ $item->kendala }}</td>
                <td>{{ $item->jenis ?? "Kosong" }}</td>  

              @endforeach
            </tbody>
     
          </table>
