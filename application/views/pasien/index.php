<div class="col-md-12">
    <h3>
    Daftar Pasien
    </h3>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Kode</th>
                <th>Nama</th>
                <th>Gender</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $nomor=1;
                foreach($list_pasien as $pasien){
            ?>
                <tr>
                <td><?=$nomor?></td>
                <td><?=$pasien->kode?></td>
                <td><?=$pasien->nama?></td>
                <td><?=$pasien->jenisKelamin()?></td>
                </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
</div>