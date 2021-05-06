<h3>Daftar Pasien</h3>

<table class="table">
        <thead>
            <tr>
                <th>#</th><th>Kode</th><th>Nama</th><th>Gender</th>
                <th>Tempat Lahir</th><th>Tanggal Lahir</th>
                <th>Email</th><th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $nomor =1;
        foreach($pasien->result() as $pasien){
       echo'
        <tr>
          <td>'.$nomor.'</td>
          <td>'.$pasien->kode.'</td>
          <td>'.$pasien->nama.'</td>
          <td>'.$pasien->gender.'</td>
          <td>'.$pasien->tmp_lahir.'</td>
          <td>'.$pasien->tgl_lahir.'</td>
          <td>'.$pasien->email.'</td>
          <td><a href="'.base_url().'index.php/pasien/view/'.$pasien->id.'">view</a></td>
        </tr>';
        $nomor++;
        }
        ?>
        </tbody>
        </table>