<div class="col-md-12">
    <h3>
    Daftar BMI Pasien
    </h3>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Tanggal Periksa</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Berat</th>
                <th>Tinggi</th>
                <th>BMI</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $nomor=1;
                foreach($data_bmipasien as $data){
            ?>
                <tr>
                <td><?=$nomor?></td>
                <td><?=$data->tanggal?></td>
                <td><?=$data->pasien->kode?></td>
                <td><?=$data->pasien->nama?></td>
                <td><?=$data->pasien->jenisKelamin()?></td>
                <td><?=$data->bmi->berat?>&nbsp;kg</td>
                <td><?=$data->bmi->tinggi?>&nbsp;cm</td>
                <td><?=$data->bmi->nilaiBMI()?></td>
                <td><?=$data->bmi->statusBMI()?></td>
                </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>