
          
     <h1 align="center"><u>Tia Ban Autoservice</u></h1>
     <h3 align="center">Laporan Mekanik Perhari</h3>
          <table class="static" align="center" rules="all" border="1px" style="width: 95%">               
            <thead>                          
              <tr>
                <th scope="col">No</th>
                <th scope="col">Hari</th>
                <th scope="col">Jumlah Konsumen Service</th>
                <th scope="col">Jenis Service</th>
                <th scope="col">Jenis Kerusakan Kendaraan</th>
                <th scope="col">Mekanik</th>
                <th scope="col">Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach ( $mekanik as $item )   
              <tr>                             
              <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item->day }}</td>
                <td>{{ $item->jmlkonsumen }}</td>
                <td>{{ $item->jservice }}</td>
                <td>{{ $item->jkerusakan }}</td>
                <td>{{ $item->tukangmekanik }}</td>
                <td>{{ $item->status }}</td>                 
              @endforeach
            </tbody>
     
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
      
          